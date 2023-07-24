<?php
namespace core;

use core\middleware\Middleware;

class Router{
    public $routes = [];
    
    function default($uri, $controller, $method){
        $this->routes[] = [
            "uri" => $uri,
            "controller" => $controller,
            "method" => $method,
            "middleware" => null
        ];
        return $this;
    }

    function get($uri, $controller){
        return $this->default($uri, $controller, "GET");
    }
    function post($uri, $controller){
        return $this->default($uri, $controller, "POST");
    }
    function delete($uri, $controller){
        return $this->default($uri, $controller, "DELETE");
    }
    function put($uri, $controller){
        return $this->default($uri, $controller, "PUT");
    }

    function only($key){
        // get the index of the last append route and change the middleware to the given argument;
        $this->routes[array_key_last($this->routes)] ['middleware'] = $key;
        return $this;
    }

    function checkRoutes(){
        return $this->routes;
    }
    function route($uri, $method){
        foreach ($this->routes as $route) {
            if($route['uri'] === $uri && strtoupper($route['method']) === $method){
                // create logic to handle that specific middleware
                
                // instantiate a Middleware class to access resolve method();
                (new Middleware)->resolve($route['middleware']);
                return require basePath('http/controllers/'.$route['controller']);
            }
        }
        $this->abort();
    }

    protected function abort($code = 404){
        http_response_code($code);
        require basePath("view/$code.php");
        die();
    }
}
