<?php
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/user', '');
$routes->get('/user/create', 'UserController::create');