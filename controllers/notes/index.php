<?php 
session_start(); 

use core\Database;
$config = require basePath("config.php");

$pdo = new Database($config['database']);
$query = " SELECT * FROM post WHERE user_id=?";
$pdo->get($query,[$_SESSION["curr_user_id"]]);
$arrPost = $pdo->fetchRows();

$properties = [
    "Heading" => "My Notes: ",
    "arrPost" => $arrPost
];
view("notes/index.view.php", $properties);