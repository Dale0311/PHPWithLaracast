<?php 
use core\Validator;
use core\App;
use core\Database;

// sanitize
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

$error = [];

// validation -- 

if(! Validator::string($email, 1, 255)){
    $error['email'] = "email with a maximum of 255 characters is required";

}
else if(! Validator::email($email)){
    $error['email'] = "email is not valid";
    
}
if(! Validator::string($password, 1, 50)){
    $error['password'] = "password with a maximum of 50 characters is required";
}

// interact with the dbase
$db = App::resolver(Database::class);

$q = "SELECT * FROM users WHERE email = ? AND password = ?";
$record = $db->get($q, [$email, md5($password)]);

$data = $record->fetchRow();

if(empty($data)){
    $error['creds'] = "invalid credentials";
}

// if there's an error
if(! empty($error)){
    $error['emailInput'] = $email;
    view("login.view.php", [
        "error" => $error
    ]);
    die();
}

$_SESSION['isLoggedIn'] = true;
$_SESSION['curr_user'] = ["name" => $data['name'], "id" => $data['id']];
header("location: /");
die();