<?php

$router = $di->getRouter();

// Define your routes here
$router->addGet('/', 'Livro::index');
$router->handle($_SERVER['REQUEST_URI']);
