<?php 
// using the intance of my Router class @index.php
// i just keep appending this using get.
$router->get("/", "index.php");
$router->get("/about", "about.php");
$router->get("/notes", "notes/index.php")->only("auth");
$router->post("/notes", "notes/store.php");
$router->delete("/notes", "notes/destroy.php");
$router->put("/notes", "notes/put.php");
$router->get("/notes/create", "notes/create.php");
$router->get("/notes/show", "notes/show.php");
$router->get("/projects", "projects.php");

$router->get("/register", "registration/index.php");
$router->post("/register", "registration/store.php");


$router->get("/login", "login/index.php")->only("guest");
$router->post("/login", "login/post.php");

$router->get("/logout", "logout/index.php");

