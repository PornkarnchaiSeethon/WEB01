<?php
require "Core/Router.php";

use Core\Router;
const BASE_PART = __DIR__.'/./';
require BASE_PART."function.php";

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_SERVER['REQUEST_METHOD'];

$router = new Router();
require base_part("router.php");
$router->route($uri, $method);