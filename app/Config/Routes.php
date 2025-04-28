<?php

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

