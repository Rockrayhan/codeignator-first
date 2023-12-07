<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'AdminHome::index' , ['filter' => 'authGuard']);
$routes->get('/products', 'ProductController::index');
$routes->get('/products/create', 'ProductController::create');
$routes->post('/products/store', 'ProductController::store');

// delete
$routes->get('/products/delete/(:num)', 'ProductController::delete/$1');
//edit
$routes->get('/products/edit/(:num)', 'ProductController::edit/$1');
//update
$routes->post('/products/update/(:num)', 'ProductController::update/$1');

// signup  / register
$routes->get('/signup', 'SignupController::index');
$routes->match(['get','post'] ,'signup/store', 'SignupController::store');

// login
$routes->get('/login', 'LoginController::index');
$routes->post('/loginuser', 'LoginController::login');

//signout
$routes->get('/signout', 'LoginController::logout');
