<?php

$router->get("/","controllers/home.php");
$router->get("/register","controllers/register.php");
$router->post("/register","controllers/registration/store.php");