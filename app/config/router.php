<?php

$router = $di->getRouter();

// Define your routes here
$router->addGet('/', 'Livro::index')->setName('livro.lista');
$router->addGet('/adicionar-livro', 'Livro::index')->setName('livro.novo');
$router->handle($_SERVER['REQUEST_URI']);
