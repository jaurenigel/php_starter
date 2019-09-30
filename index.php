<?php

$query = require './core/bootstrap.php';

$router = new Router;

$uri = trim($_SERVER['REQUEST_URI'], '/');


$router = Router::load('router.php');

require $router->direct($uri);


