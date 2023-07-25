<?php
use core\Session;
use core\ValidationException;

session_start();
const BASE_PATH = __DIR__ . '/../';
require BASE_PATH."core/functions.php"; 
spl_autoload_register(function($class){
    str_replace("\\", DIRECTORY_SEPARATOR, $class);
    require basePath("{$class}.php");
}); 

require basePath("foo.php");

$router = new \core\Router(); 
$routes = require basePath("routes.php") ;
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// check if $_POST with a name _method exist. 
$method = $_POST["_method"]?? $_SERVER['REQUEST_METHOD'];


// try run this code block
try 
{
$router->route($uri, $method);
} 
// if there's a specific problem that is match with my args in my catch block
// run the catch scope 
catch (ValidationException $exception) 
{
Session::flash("error", $exception->errors);
redirect($router->previousUrl());
}

Session::unflash();