<?php
const BASE_PATH = __DIR__ . '/../';
require BASE_PATH."core/functions.php"; 
spl_autoload_register(function($class){
    str_replace("\\", DIRECTORY_SEPARATOR, $class);
    require basePath("{$class}.php");
}); 

$router = new \core\Router(); // same as use \core\Router
$routes = require basePath("routes.php") ;
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_SERVER['REQUEST_METHOD'];
$router->route($uri, $method);