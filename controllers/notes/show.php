<?php 
session_start();
$config = require basePath("config.php"); 

// if $_GET['id'] is set then gonna create variable of Id, if not dont create.
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $pdo = new Database($config['database']);
    $query = "SELECT * FROM post WHERE id=?";
    $pdo->get($query, [$id]);
    $arrRow = $pdo->fetchRow();
    
    // is there a record? 
    hasRecord($arrRow);
    
    // if condition not true
    authorize($arrRow['user_id'] === $_SESSION['curr_user_id']);
    
    $properties = [
        "Heading" => "My note:",
        "arrRow" => $arrRow
    ];
    view("/notes/show.view.php", $properties);
}else{
    header("location: notes");
}