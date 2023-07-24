<?php 
use http\forms\LoginForm;
use core\Authenticator;
use core\Session;
// sanitize
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);


// #my code
// $form = new LoginForm;

// // if there's not a data correspond with the user input then execute this
// if(! $form->loginAuth(compact('email', 'password'))){
//     view("login.view.php", [
//         "error" => $form->errors()
//     ]);
//     die();
// }

// $data = $form->getData();
// $_SESSION['isLoggedIn'] = true;
// $_SESSION['curr_user'] = ["name" => $data['name'], "id" => $data['id']];
// header("location: /");
// die();

// #jeffrey way's code.

$form = new LoginForm;

// if user input is valid
if($form->validate(compact('email', 'password'))){
    
    $authenticator = new Authenticator;
    // if there's a data correspond with the user input
    if($authenticator->attempt(compact('email', 'password'))){
        $data = $authenticator->data();
        $_SESSION['curr_user'] = ['name'=> $data['name'], 'id'=> $data['id']];
        header("location: /");
        die();
    }

    // implicit else
    $form->addError("creds", "No matching data found.");
}

//if user input not valid 
$form->addError("emailInput", $email);

// post
// note: in my post.php i added a session[_flash] error arr to pass it to the 'get' in PRG
// i created class that handle sessions for me
// and i just unset the _flash just after the route method called. 
Session::flash("error", $form->errors());

// Redirect
return redirect("/login");
