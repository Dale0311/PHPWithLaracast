<?php 

if(isset($_SESSION['curr_user'])){
    header("location: /");
    die();
}
view("register.view.php", []);