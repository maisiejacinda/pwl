<?php

include "Mahasiswa.php";

$mahasiswaTI = new Mahasiswa();
$mahasiswaTI->setData('A11.2000.00001', 'Fulan', 'Teknik Informatika');

$mahasiswaSI = new Mahasiswa();
$mahasiswaSI->setData('A12.2000.00001', 'Junior', 'Sistem Informasi');

// Menampilkan data masing-masing mahasiswa
$mahasiswaTI->tampilkanData();
$mahasiswaSI->tampilkanData();
