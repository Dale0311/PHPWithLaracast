<?php 
// using the intance of my Router class @index.php
// i just keep appending this using get.
$router->get("/", "controllers/index.php");
$router->get("/about", "controllers/about.php");
$router->get("/notes", "controllers/notes/index.php");
$router->post("/notes", "controllers/notes/store.php");
$router->delete("/notes", "controllers/notes/destroy.php");
$router->put("/notes", "controllers/notes/put.php");
$router->get("/notes/create", "controllers/notes/create.php");
$router->get("/notes/show", "controllers/notes/show.php");
$router->get("/projects", "controllers/projects.php");

$router->get("/register", "controllers/registration/index.php");
$router->post("/register", "controllers/registration/store.php");