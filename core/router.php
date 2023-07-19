<?php
namespace core;
class Router{
    public $routes = [];
    
    function default($uri, $controller, $method){
        $this->routes[] = [
            "uri" => $uri,
            "controller" => $controller,
            "method" => $method,
        ];
    }

    function get($uri, $controller){
        $this->default($uri, $controller, "GET");
    }
    function post($uri, $controller){
        $this->default($uri, $controller, "POST");
    }
    function delete($uri, $controller){
        $this->default($uri, $controller, "DELETE");
    }
    function put($uri, $controller){
        $this->default($uri, $controller, "PUT");
    }

    function route($uri, $method){
        foreach ($this->routes as $route) {
            if($route['uri'] === $uri && strtoupper($route['method']) === $method){
                return require basePath($route['controller']);
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
