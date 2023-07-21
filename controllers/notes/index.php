<?php 
// redirect to register new account or login if the user is not currently logged in.
use core\Database;
use core\App;
$pdo = App::resolver(Database::class);
$query = " SELECT * FROM post WHERE user_id=?";
$pdo->get($query,[$_SESSION["curr_user"]['id']]);
$arrPost = $pdo->fetchRows();

$properties = [
    "Heading" => "My Notes: ",
    "arrPost" => $arrPost
];
view("notes/index.view.php", $properties);