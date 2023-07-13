<?php 
    function navActive($val){
        return $_SERVER['REQUEST_URI'] === $val;
    }