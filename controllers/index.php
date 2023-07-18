<?php 
session_start();
$_SESSION['curr_user_id'] =1;
view("index.view.php", ["Heading" => "Dashboard"]);