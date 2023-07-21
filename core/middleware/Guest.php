<?php 

namespace core\middleware;
class Guest{
    function handle(){
        if($_SESSION['curr_user']?? false){
            header("location: /");
            die();
        }
    }
}