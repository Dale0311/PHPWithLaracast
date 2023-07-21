<?php 

namespace core\middleware;

class Auth{
    function handle(){
        if(! $_SESSION['curr_user']?? false){
            header("location: /login");
            die();
        }
    }
}