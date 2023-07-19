<?php 

namespace core;
use Exception;

// service container 
class Container{
    public $bindings = [];
    
    // add bindings
    function bind($key, $fn){
        $this->bindings[$key] = $fn;
    }

    function resolver($key){
        if(! array_key_exists($key, $this->bindings)){
            throw new Exception("No matching binding found {$key}");
            die();
        }
        
        $resolver = $this->bindings[$key];
        return call_user_func($resolver);
    }
}