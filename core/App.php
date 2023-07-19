<?php 
namespace core;
class App{
    public static $container;

    static function setContainer($container){
        static::$container = $container;
    }

    static function container(){
        return static::$container;
    }

    static function bind($key, $fn){
        self::container()->resolver($key, $fn);
    }

    static function resolver($key){
        return self::container()->resolver($key);
    }

}