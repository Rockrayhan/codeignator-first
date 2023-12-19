<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'AdminHome::index', ['filter' => 'authGuard']);
$routes->get('/products', 'ProductController::index', ['filter' => 'authGuard']);
$routes->get('/products/create', 'ProductController::create', ['filter' => 'authGuard']);
$routes->post('/products/store', 'ProductController::store', ['filter' => 'authGuard']);

// delete
$routes->get('/products/delete/(:num)', 'ProductController::delete/$1', ['filter' => 'authGuard']);
//edit
$routes->get('/products/edit/(:num)', 'ProductController::edit/$1', ['filter' => 'authGuard']);
//update
$routes->post('/products/update/(:num)', 'ProductController::update/$1', ['filter' => 'authGuard']);

// signup  / register
$routes->get('/signup', 'SignupController::index');
$routes->match(['get', 'post'], 'signup/store', 'SignupController::store');

// login
$routes->get('/login', 'LoginController::index');
$routes->post('/loginuser', 'LoginController::login');

//signout
$routes->get('/signout', 'LoginController::logout');

//category 
$routes->get('/category', 'CategoryController::index', ['filter' => 'authGuard']); //category list
$routes->get('category/create', 'CategoryController::create', ['filter' => 'authGuard']); //category create
$routes->post('category/store', 'CategoryController::store', ['filter' => 'authGuard']); //category store/save
$routes->get('category/edit/(:num)', 'CategoryController::edit/$1', ['filter' => 'authGuard']); //category edit
$routes->post('category/update/(:num)', 'CategoryController::update/$1', ['filter' => 'authGuard']); //category update
$routes->get('category/delete/(:num)', 'CategoryController::delete/$1', ['filter' => 'authGuard']); //category delete



// Frond end
$routes->get('/productsall', 'frontend\ProductController::index');
$routes->post('/product/(:num)', 'frontend\ProductController::show/$1');


// Editor Routes
$routes->get('/editor', 'EditorController::index', ['filter' => 'noAuth']);

$routes->get('/register', 'frontend\RegistrationController::register');
