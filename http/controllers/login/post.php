<?php 
use http\forms\LoginForm;
use core\Authenticator;

// sanitize
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

// if form is inputs are valid
$form = LoginForm::validate(compact('email', 'password'));

$authenticator = new Authenticator;

// if there's no data correspond with the user input
$signIn = $authenticator->attempt(compact('email', 'password'));
if(!$signIn){
    $form->addError("creds", "No matching credentials found!")->throw();
}

$data = $authenticator->data();
$_SESSION['curr_user'] = ['name'=> $data['name'], 'id'=> $data['id']];
redirect("/");
die();

