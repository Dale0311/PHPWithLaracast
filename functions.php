<?php 
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

    