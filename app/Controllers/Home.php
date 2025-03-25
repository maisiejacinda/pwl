<?php

namespace App\Controllers;

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
    }
}
