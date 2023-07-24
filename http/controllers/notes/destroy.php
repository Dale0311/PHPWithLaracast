<?php 
use core\App;
$pdo = App::resolver("core\Database");
$id = htmlspecialchars($_POST['id']);
$q = "DELETE FROM post WHERE id=?";
if($pdo->get($q, [$id])){
    header("location: notes");
}
dd("something went wrong");


