<?php

use CodeIgniter\Router\RouteCollection; // Menggunakan class RouteCollection untuk mengelola rute

/**
 * @var RouteCollection $routes
 * Mendefinisikan variabel $routes sebagai instance dari RouteCollection
 */

// Rute untuk halaman utama (beranda)
$routes->get('/', 'Home::index');  
// Saat pengguna mengakses "http://localhost:8080/", maka akan memanggil metode `index()` di `Home` controller

// Rute untuk halaman kategori utama
$routes->get('/kategori', 'Home::kategori');  
// Saat pengguna mengakses "http://localhost:8080/kategori", maka akan memanggil metode `kategori()` di `Home` controller
// Halaman ini akan menampilkan daftar kategori yang tersedia

// Rute untuk halaman detail kategori
$routes->get('/kategori/(:any)', 'Home::detailKategori/$1');  
// Jika pengguna mengakses "http://localhost:8080/kategori/Alat Tulis", 
// maka akan memanggil metode `detailKategori($1)` di `Home` controller
// Parameter `(:any)` menangkap nilai apa pun setelah "/kategori/" dan mengirimkannya ke metode `detailKategori()`

// ('yang pertama untuk nama rute', 'yang kedua untuk metode yang dipanggil dari controller')
