<?php

use CodeIgniter\Router\RouteCollection; 

/**
 * @var RouteCollection $routes
 * Mendefinisikan variabel $routes sebagai instance dari RouteCollection
 */

$routes->get('/', 'Home::index');  
$routes->get('/kategori', 'Home::kategori');  
$routes->get('/kategori/(:any)', 'Home::detailKategori/$1');  

// ('yang pertama untuk nama rute', 'yang kedua untuk metode yang dipanggil dari controller')
