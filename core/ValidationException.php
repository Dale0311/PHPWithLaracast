<?php 
namespace core;
use Exception;

class ValidationException extends Exception
{
    public readonly array $errors;
    static function throw($errors)
    {
        $instance = new self;
        $instance->errors = $errors;
        throw $instance;
    }
}