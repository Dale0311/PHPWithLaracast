<!-- i know for a fact that the request method is put -->
<?php 
session_start();
use core\Database;
use core\Validator;

$config = require basePath("config.php");
$heading = "My Note";
$db = new Database($config['database']);
// validation
if($_SESSION['curr_user_id'] !== (int)$_POST['user_id']){
    abort(403);
}

$error = [];

// get all query params and sanitize it
$title = htmlspecialchars($_POST['title']);
$body = htmlspecialchars($_POST['body']);
$id = htmlspecialchars($_POST['id']);
$user_id = (int)$_POST['user_id'];
$arrRow = compact("id" ,"title", "body", "user_id");

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

// always configure the sad path first
if(! empty($error)){
    return view("notes/show.view.php", [
        'heading' => $heading,
        'error' => $error, 
        'arrRow' => $arrRow
    ]);
}

$q = "UPDATE post SET title = ?, body = ? WHERE id = ?";

// prepared statement
$db->get($q, [$arrRow['title'], $arrRow['body'], $arrRow['id']]); 
header("location: ../notes");