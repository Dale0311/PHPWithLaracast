<?php 
use core\Validator;
use core\App;
use core\Database;

// sanitize
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

$error = [];

// validation -- 
if(! Validator::string($name, 1, 50)){
    $error['name'] = "name with a maximum of 50 characters is required";
}
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

$q = "SELECT email FROM users WHERE email = ?";
$record = $db->get($q, [$email]);

// if email is already exist then throw error
if(! empty($record->fetchRow())){
    $error['emailExist'] = "email is already been taken";
}

// if there's an error
if(! empty($error)){
    $error['nameInput'] = $name;
    $error['emailInput'] = $email;

    view("register.view.php", [
        "error" => $error
    ]);
    die();
}

// happy path
$q = "INSERT INTO users(name, email, password) VALUES(?, ?, ?)";

$record = $db->get($q, [$name, $email, md5($password)]);
$_SESSION['isLoggedIn'] = true;
$_SESSION['curr_user'] = ["name" => $name, "id" => $record->getLastInsertedID()];
header("location: /");



