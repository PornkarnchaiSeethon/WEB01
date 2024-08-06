<?php

$router->get("/","controllers/home.php");

$router->get("/register","controllers/register.php");
$router->post("/register","controllers/registration/store.php");

$router->get("/login","controllers/login.php");
$router->post("/login","controllers/registration/create.php");