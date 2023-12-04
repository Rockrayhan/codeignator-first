<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'AdminHome::index');
$routes->get('/products', 'ProductController::index');
$routes->get('/products/create', 'ProductController::create');
$routes->post('/products/store', 'ProductController::store');

// delete
$routes->get('/products/delete/(:num)', 'ProductController::delete/$1');
//edit
$routes->get('/products/edit/(:num)', 'ProductController::edit/$1');



