<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 * Mendefinisikan variabel $routes sebagai instance dari RouteCollection
 */

// Routing untuk Auth
$routes->get('/', 'AuthController::login'); // default route ke login
$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::attemptLogin');
$routes->get('/logout', 'AuthController::logout');

// Routing untuk Dashboard
$routes->get('/admin', 'DashboardController::adminDashboard', ['filter' => 'auth']);
$routes->get('/user', 'DashboardController::userDashboard', ['filter' => 'auth']);

// Routing untuk Cart
$routes->get('/user/addToCart/(:num)', 'DashboardController::addToCart/$1', ['filter' => 'auth']);
$routes->get('/user/cart', 'DashboardController::cart', ['filter' => 'auth']);

// Routing untuk Home
$routes->get('/home', 'Home::index');  
$routes->get('/kategori', 'Home::kategori');  
$routes->get('/kategori/(:any)', 'Home::detailKategori/$1');
