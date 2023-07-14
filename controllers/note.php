<?php 
session_start();
$heading = "Note";
$config = require "config.php";
$id = $_GET['id'];
$pdo = new Database($config['database']);
$query = "SELECT * FROM post WHERE id=?";
$posts = $pdo->get($query, [$id]);
$arrRow = fetchRow($posts);

// authorization
if(!$arrRow){
    abort(404);
}
if($arrRow['user_id'] !== $_SESSION['curr_user_id']){
    abort(403);
}


require_once "view/note.view.php";