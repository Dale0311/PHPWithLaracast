<?php
$routes = require basePath("routes.php") ;
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

function abort($code = 404){
    http_response_code($code);
    require "view/$code.php";
    die();
}
// check if the uri exist, if so then require it
function routeToController($uri, $routes){
    if(array_key_exists($uri, $routes)) {
        require $routes[$uri];
    }
    else{
        abort(Response::$NOTFOUND);
    }
}

routeToController($uri, $routes);
?>