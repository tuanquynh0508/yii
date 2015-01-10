<?php
class checkSex extends CValidator
{
    
    public $message = '';
    public $allowEmpty = true;
    
    protected function validateAttribute($object,$attribute)
    {
        $value = intval($object->$attribute);
        
        //Bỏ qua nếu chấp nhận rỗng
        if($this->allowEmpty && empty($value))
        return;
        
        $message=!empty($this->message)?$this->message:"Không chơi với GAY hoặc LES";

        // extract the attribute value from it's model object
        
        if(!in_array($value, array(1,2)))
        {
            $this->addError($object,$attribute,$message);
        }
    }
    
}