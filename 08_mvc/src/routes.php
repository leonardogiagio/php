<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/novo', 'UsersController@add');
$router->post('/novo', 'UsersController@addAction');