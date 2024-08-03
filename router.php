<?php

$router->get("/","controllers/home.php");
$router->get("/register","controllers/register.php")->only('gust');
$router->post("/register","controllers/registration/store.php");