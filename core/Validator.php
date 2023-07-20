<?php 
// name space
namespace core;
class Validator {
    static function string(string $string, int $min = 1, int $max = INF){
        $string = trim($string);
        // return bol
        return strlen($string) >= $min && strlen($string) <= $max;
    }

    static function email($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

}