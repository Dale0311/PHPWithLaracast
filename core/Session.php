<?php 
namespace core;

class Session{
    static function has($key){
        return (bool) self::get($key);
    }
    static function put($key, $value){
        $_SESSION[$key] = $value;
    }
    static function get($key, $default = []){
        return $_SESSION['_flash'][$key]?? $_SESSION[$key]?? $default;
    }

    static function flash($key, $value){
        $_SESSION['_flash'][$key] = $value;
    }
    static function unflash(){
        unset($_SESSION['_flash']);
    }

}