<?php

namespace App\Controllers;

<<<<<<< HEAD
class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
=======
class Home extends BaseController 
{
    public function index()
    {
        return view('welcome_message'); 
    }

    public function kategori()
    {
        return view('kategori');  
    }

    public function detailKategori($kategori)
    {
        $produkList = [
            'Alat Tulis' => ['Buku', 'Pena', 'Pensil', 'Penghapus', 'Spidol'],
            'Pakaian' => ['Kaos', 'Kemeja', 'Jaket', 'Celana', 'Sepatu'],
            'Peralatan' => ['Obeng', 'Tang', 'Palet', 'Gergaji', 'Bor'],
            'Elektronik' => ['Laptop', 'Handphone', 'Tablet', 'TV', 'Radio'],
            'Snack' => ['Keripik', 'Coklat', 'Permen', 'Kacang', 'Biskuit']
        ];

        $data['kategori'] = $kategori;
        $data['produk'] = $produkList[$kategori] ?? [];
        return view('detail_kategori', $data);
>>>>>>> 10bdc49ebe02728f59295060d8cd0bfd2405dc83
    }
}
