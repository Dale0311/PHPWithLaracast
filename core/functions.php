<?php 
use core\Response;
    function navActive($val){
        return $_SERVER['REQUEST_URI'] === $val;
    }

    function dd($var){
        echo "<pre>";
            var_dump($var);
        echo "<pre>";
        die();
    }

    function hasRecord($arr){
        if (! $arr){
            abort(Response::$NOTFOUND);
        }
    }

    function authorize($condition){
        if(!$condition){
            abort(Response::$FORBIDDEN);
        }
    }

    function basePath($path){
        return BASE_PATH . $path;
    }

    function view($path, $properties=[]){
        extract($properties);
        require basePath("view/".$path);
    }
    
    function dateCreated(){
        date_default_timezone_set("Asia/Manila");
        return date("Y-M-d h:i:sa");
    }


    