<?php

class HelloForm extends CFormModel
{
    public $fullname;
	public $message;
    public $age;
    public $sex;
    
    public function rules()
	{
		return array(
			array('fullname, message', 'required'),
			array('fullname', 'length', 'max'=>25),
            array('age', 'numerical', 'integerOnly'=>true),
            array('age', 'checkAge18Plus', 'min'=>18, 'message' => 'Chưa đủ tuổi'),
            array('sex', 'application.components.validators.checkSex', 'allowEmpty'=>false),
		);
	}
    
    public function checkAge18Plus($attribute,$params)
    {
        $message = "Chưa đủ tuổi xem đâu.";
        if(!empty($params['message']))
            $message = $params['message'];
        
        if($this->$attribute < $params['min'])
            $this->addError($attribute, $message);
    }
}
