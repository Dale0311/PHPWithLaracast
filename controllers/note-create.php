<?php 
session_start();
$config = require "config.php";
$heading = "Create Note";
$db = new Database($config['database']);

if(isset($_POST['submitForm'])){
    $title = htmlspecialchars($_POST['title']);
    $body = htmlspecialchars($_POST['body']);
    $q = "INSERT INTO post (`title`, `body`, `user_id`) VALUES (?, ?, ?)";
    $db->get($q, [$title, $body, $_SESSION['curr_user_id']]); 
}

require "view/note-create.view.php";