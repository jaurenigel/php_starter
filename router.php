<?php

$id;

$router->url([
    '' => 'controller/IndexController.php',
    'about' => 'controller/AboutController.php',
    'error' => 'controller/ErrorController.php',
    'docs' => 'controller/DocController.php',
    'docs/database' => 'controller/DbController.php'
]);