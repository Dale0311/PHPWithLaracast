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

    