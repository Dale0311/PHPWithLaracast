<?php 
session_start();

use core\Database;
use core\Validator;

$config = require basePath("config.php");
$heading = "Create Note";
$db = new Database($config['database']);

if(isset($_POST['submitForm'])){
    $error = [];
    // get all query params and sanitize it
    $title = htmlspecialchars($_POST['title']);
    $body = htmlspecialchars($_POST['body']);
    // restriction
    $titleMax = 100;
    $bodyMax = 500;
    // validation
    // if not true
    if(! Validator::string($title,1,$titleMax)){
        $error['title'] = "Title with a maximum of $titleMax characters is required.";  
    }
    if(! Validator::string($body,1,$bodyMax)){
        $error['body'] = "Body with a maximum of $bodyMax characters is required.";  
    }

    if(empty($error)){
        $q = "INSERT INTO post (`title`, `body`, `user_id`) VALUES (?, ?, ?)";
        $db->get($q, [$title, $body, $_SESSION['curr_user_id']]); 
        header("location: ../notes");
    }
}
$properties = [
    "Heading" => $heading,
    "error" => $error?? ""
];
view("/notes/create.view.php", $properties);