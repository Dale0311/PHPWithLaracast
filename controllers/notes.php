<?php 
session_start(); 
$heading = "My Notes:";
$config = require "config.php";
$pdo = new Database($config['database']);
$query = " SELECT * FROM post WHERE user_id=?";
$_SESSION["curr_user_id"] = 1;

$pdo->get($query,[$_SESSION["curr_user_id"]]);
$arrPost = $pdo->fetchRows();
require_once "view/notes.view.php";