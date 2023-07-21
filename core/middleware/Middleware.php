<?php
namespace core\middleware;
use core\middleware\Auth;
use core\middleware\Guest;
use Exception;

class Middleware{
    public $MAP = [
        'guest' => Guest::class,
        'auth' => Auth::class,
    ];
    public function resolve($key){
        
        // if falsy
        if(!$key){
            return;
        }
        
        // path of a certain class
        $middleware = $this->MAP[$key] ?? false; //return the path of the class return false if no middleware
        
        // if there's no path then throw error, we can't find it
        if(!$middleware){
            throw new Exception("No matching middleware found! {$key}");
            die();
        }
        // if there's then instantiate it and access the given method
        (new $middleware)->handle(); //instantiating the class using instanceOnce HAHAHA to access that handle method @the given class
    }
}