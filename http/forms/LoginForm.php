<?php 
namespace http\forms;
use core\Validator;
use core\ValidationException;

class LoginForm {
    protected $error = [];
    
    // instantly validate the inputs upon instantiating
    function __construct(public $attributes)
    {
        extract($attributes);
        if(! Validator::string($email, 1, 255)){
            $this->error['email'] = "email is required";

        }
        else if(! Validator::email($email)){
            $this->error['email'] = "email is not valid";

        }
        if(! Validator::string($password, 1, 50)){
            $this->error['password'] = "please provide a valid password";
        }
    }

    // upon instantiating i did the validation already
    static function validate($attributes)
    {
        $instance = new self($attributes);
        // condition if there's an error.
        return $instance->failed()? $instance->throw() : $instance;
    }
    function throw()
    {
        $this->addError("emailInput", $this->attributes['email']);
        ValidationException::throw($this->errors());
    }
    // returns a bool if validation is true or false
    function failed(){
        return count($this->error);
    }
    
    function errors(){
        return $this->error;
    }

    function addError($key, $val){
        $this->error[$key] = $val;
        return $this;
    }
}