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

    function route($uri){
        foreach ($this->routes as $route) {
            if($route['uri'] === $uri){
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
// // name space
// use core\Response;



// // check if the uri exist, if so then require it
// function routeToController($uri, $routes){
//     if(array_key_exists($uri, $routes)) {
//         require $routes[$uri];
//     }
//     else{
//         abort(Response::$NOTFOUND);
//     }
// }

?>