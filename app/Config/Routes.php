<?php

<<<<<<< HEAD
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::login'); // default route ke login

$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::attemptLogin');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/admin', 'DashboardController::adminDashboard', ['filter' => 'auth']);
$routes->get('/user', 'DashboardController::userDashboard', ['filter' => 'auth']);

$routes->get('/user/addToCart/(:num)', 'DashboardController::addToCart/$1', ['filter' => 'auth']);
$routes->get('/user/cart', 'DashboardController::cart', ['filter' => 'auth']);

=======
use CodeIgniter\Router\RouteCollection; 

/**
 * @var RouteCollection $routes
 * Mendefinisikan variabel $routes sebagai instance dari RouteCollection
 */

$routes->get('/', 'Home::index');  
$routes->get('/kategori', 'Home::kategori');  
$routes->get('/kategori/(:any)', 'Home::detailKategori/$1');  

// ('yang pertama untuk nama rute', 'yang kedua untuk metode yang dipanggil dari controller')
>>>>>>> 10bdc49ebe02728f59295060d8cd0bfd2405dc83
