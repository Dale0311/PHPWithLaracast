<?php 
// return [
//     "/"=> BASE_PATH."controllers/index.php",
//     "/about"=> BASE_PATH."controllers/about.php",
//     "/notes"=> BASE_PATH."controllers/notes/index.php",
//     "/notes/create"=> BASE_PATH."controllers/notes/create.php",
//     "/notes/show"=> BASE_PATH."controllers/notes/show.php",
//     "/projects"=> BASE_PATH."controllers/projects.php",
// ];

// using the intance of my Router class @index.php
// i just keep appending this using get.
$router->get("/", BASE_PATH."controllers/index.php");
$router->get("/about", BASE_PATH."controllers/about.php");
$router->get("/notes", BASE_PATH."controllers/notes/index.php");
$router->get("/notes/create", BASE_PATH."controllers/notes/create.php");
$router->get("/notes/show", BASE_PATH."controllers/notes/show.php");
$router->get("/projects", BASE_PATH."controllers/projects.php");