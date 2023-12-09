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

//category 
$routes->get('/category', 'CategoryController::index'); //category list
$routes->get('category/create', 'CategoryController::create'); //category create
$routes->post('category/store', 'CategoryController::store'); //category store/save
$routes->get('category/edit/(:num)', 'CategoryController::edit/$1'); //category edit
$routes->post('category/update/(:num)', 'CategoryController::update/$1'); //category update
$routes->get('category/delete/(:num)', 'CategoryController::delete/$1'); //category delete