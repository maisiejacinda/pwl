<?php

namespace App\Controllers;  // Mendeklarasikan namespace controller dalam folder App\Controllers

class Home extends BaseController // Kelas Home merupakan turunan dari BaseController
{
    public function index()
    {
        return view('welcome_message'); 
        // Metode ini akan menampilkan halaman utama (welcome_message.php) ketika "/" diakses
    }

    public function kategori()
    {
        return view('kategori');  
        // Metode ini akan menampilkan halaman daftar kategori (kategori.php) saat "/kategori" diakses
    }

    public function detailKategori($kategori)
    {
        // Daftar produk berdasarkan kategori
        $produkList = [
            'Alat Tulis' => ['Buku', 'Pena', 'Pensil', 'Penghapus', 'Spidol'],
            'Pakaian' => ['Kaos', 'Kemeja', 'Jaket', 'Celana', 'Sepatu'],
            'Peralatan' => ['Obeng', 'Tang', 'Palet', 'Gergaji', 'Bor'],
            'Elektronik' => ['Laptop', 'Handphone', 'Tablet', 'TV', 'Radio'],
            'Snack' => ['Keripik', 'Coklat', 'Permen', 'Kacang', 'Biskuit']
        ];

        // Menyimpan nama kategori yang dipilih ke dalam array data
        $data['kategori'] = $kategori;

        // Mencari produk berdasarkan kategori yang dipilih, jika tidak ada maka nilai defaultnya array kosong
        $data['produk'] = $produkList[$kategori] ?? [];

        // Mengirimkan data ke tampilan detail_kategori.php
        return view('detail_kategori', $data);
    }
}
