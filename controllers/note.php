<?php 
session_start();
$heading = "Note:";
$config = require "config.php";

// if $_GET['id'] is set then gonna create variable of Id, if not dont create.
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $pdo = new Database($config['database']);
    $query = "SELECT * FROM post WHERE id=?";
    $pdo->get($query, [$id]);
    $arrRow = $pdo->fetchRow();
    
    // is there a record? 
    hasRecord($arrRow);
    
    // if user_id != to curr_user_id
    authorize($arrRow['user_id'] === $_SESSION['curr_user_id']);
    
    require_once "view/note.view.php";
}else{
    header("location: notes");
}