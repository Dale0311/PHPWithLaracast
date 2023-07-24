<?php 
namespace http\forms;
use core\Validator;

class LoginForm {
    protected $error = [];
    
    function validate($attributes){
        extract($attributes);
        if(! Validator::string($email, 1, 255)){
            $this->error['email'] = "email with a maximum of 255 characters is required";

        }
        else if(! Validator::email($email)){
            $this->error['email'] = "email is not valid";

        }
        if(! Validator::string($password, 1, 50)){
            $this->error['password'] = "password with a maximum of 50 characters is required";
        }

        return empty($this->error);
    }

    function errors(){
        return $this->error;
    }

    function addError($key, $val){
        $this->error[$key] = $val;
    }
}