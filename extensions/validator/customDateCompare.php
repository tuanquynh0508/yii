<?php
/**
 * Compare tow date value
 *
 * @package CValidator
 * @author Nguyen Nhu Tuan <tuanquynh0508@gmail.com>
 * @since 1.0
 * @example array('end_date','ext.validators.customDateCompare','format'=>'yyyy/M/d', 'compareAttribute'=>'close_date','operator'=>'>', 'allowEmpty'=>true, 'message'=>Yii::t('yii','end_date must be greater than "{compareValue}".')),
 */
class customDateCompare extends CValidator {
    
    /**
	 * @var string $message Message default
	 */
	public $message = '';
    
    /**
	 * @var string $compareAttribute
	 */
	public $compareAttribute = '';
    
    /**
	 * @var string $operator
	 */
	public $operator = '';
    
    /**
	 * @var string $format
	 */
	public $format = '';
    
    /**
	 * @var boolean whether the attribute value can be null or empty. Defaults to true,
	 * meaning that if the attribute is empty, it is considered valid.
	 */
	public $allowEmpty = true;
    
    protected function validateAttribute($object, $attribute) {		
		$compareAttribute = $this->compareAttribute;
        $operator = $this->operator;
        $format = $this->format;
        
        if (empty($compareAttribute) || empty($operator))
            $this->addError($object,$attribute,'Invalid Parameters to dateCompare');
        
        $value = $object->$attribute;
        $compareTo=$object->$compareAttribute;
        
        //If allow empty, value is empty or compare value empty to return
        if($this->allowEmpty && ($this->isEmpty($value) || $this->isEmpty($compareTo)))
        return;

        $format=(!$this->isEmpty($format))? $format : 'yyyy-MM-dd';
        //default operator to >
        $compare=(!$this->isEmpty($operator))? $operator : ">";

        $start=CDateTimeParser::parse($value,$format);
        $end=CDateTimeParser::parse($compareTo,$format);
        
        $message=!empty($this->message)?$this->message:Yii::t('yii','{attribute} must be greater than "{compareValue}".');
        if (version_compare($start,$end,$compare)) {
            return;
        } else {
            $this->addError($object,$attribute,$message,array('{compareValue}'=>$compareTo));
        }        
	}
    
}
