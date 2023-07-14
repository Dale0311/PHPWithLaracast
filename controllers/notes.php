<?php 
session_start(); 
$heading = "Notes Section";
$config = require "config.php";
$pdo = new Database($config['database']);
$query = " SELECT * FROM post WHERE user_id=?";
$_SESSION["curr_user_id"] = 1;
$post = $pdo->get($query,[$_SESSION["curr_user_id"]]);
$arrPost = fetchRows($post);
require_once "view/notes.view.php";