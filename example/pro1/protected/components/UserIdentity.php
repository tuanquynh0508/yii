<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    private $_id;
    private $_fullname;
    
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		/*$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);*/
        
        /*if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;*/
                
        $user = Staff::model()->getUserLogin($this->username);
        
        if ($user===null) {
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        } else if ($user->staff_pwd !== $this->password ) { 
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        } else { // Okay!
            $this->_id=$user->staff_id;
            $this->_fullname=$user->fullname;
            $this->setState('staffname', $user->fullname);
            $this->errorCode=self::ERROR_NONE;
        }
        		
		return !$this->errorCode;
	}
    
    public function getId()
    {
        return $this->_id;
    }
    
    public function getName()
    {
        return $this->_fullname;
    }
}