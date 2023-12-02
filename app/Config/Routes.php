<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'AdminHome::index');
$routes->get('/products', 'ProductController::index');
