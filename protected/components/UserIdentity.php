<?php
//class UserIdentity extends CUserIdentity
//{
//    private $_id;
//    public function authenticate()
//    {
//        $record=User::model()->findByAttributes(array('username'=>$this->username));
//        if($record===null)
//            $this->errorCode=self::ERROR_USERNAME_INVALID;
//        else if($record->password!==crypt($this->password,$record->password))
//            $this->errorCode=self::ERROR_PASSWORD_INVALID;
//        else
//        {
//            $this->_id=$record->id;
//            $this->setState('title', $record->title);
//            $this->errorCode=self::ERROR_NONE;
//            return !$this->errorCode;
//        }
//    }
//    public function getId()
//    {
//        return $this->_id;
//    }
//}
//
class UserIdentity extends CUserIdentity {
    private $_id;
 //   public function authenticate()
 //   { $user=User::model()>find('LOWER(username)=?',
 //       array(strtolower($this->username))); if($user===null)
 //       $this->errorCode=self::ERROR_USERNAME_INVALID; else if(!$user->validatePassword($this->password)) $this->errorCode=self::ERROR_PASSWORD_INVALID; else
 //   {
 //       $this->_id=$user->id;
 //       $this->username=$user->username;
 //       $this->setState('lastLogin', date("m/d/y g:i A",
 //           strtotime($user->last_login_time)));
 //       $user->saveAttributes(array('last_login_time'=>date("Y-m-d H:i:s", time()),
 //       ));
 //       $this->errorCode=self::ERROR_NONE;
 //       die($user->password);
 //   }
 //   return $this->errorCode==self::ERROR_NONE;
 //   }
 //   public function getId()
 //   {
//       return $this->_id; }
    
    public function authenticate()
    {
        $user = User::model()->findByAttributes(array('username'=>$this->username));

        if ($user===null) {
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        }
        else if ($user->password !== md5($this->password) ) { 
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        } else { // Okay!
            $this->errorCode=self::ERROR_NONE;
            
            
        }
        return !$this->errorCode;
    }
}

