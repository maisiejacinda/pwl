<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function adminDashboard()
    {
        return view('dashboard/admin', [
            'username' => session()->get('username'),
            'role' => session()->get('role')
        ]);
    }

    public function userDashboard()
    {
        $produk = [
            ['id' => 1, 'nama' => 'Glow Serum', 'harga' => 80000, 'gambar' => 'serum.png'],
            ['id' => 2, 'nama' => 'Pink Toner', 'harga' => 65000, 'gambar' => 'toner.png'],
            ['id' => 3, 'nama' => 'Soft Cleanser', 'harga' => 50000, 'gambar' => 'cleanser.jpg'],
        ];
        
    
        return view('dashboard/user', [
            'username' => session()->get('username'),
            'role'     => session()->get('role'),
            'produk'   => $produk
        ]);
    }
    

    public function addToCart($id)
    {
        $produk = [
            1 => ['id' => 1, 'nama' => 'Glow Serum', 'harga' => 80000],
            2 => ['id' => 2, 'nama' => 'Pink Toner', 'harga' => 65000],
            3 => ['id' => 3, 'nama' => 'Soft Cleanser', 'harga' => 50000],
        ];

        $cart = session()->get('cart') ?? [];
        $cart[] = $produk[$id];
        session()->set('cart', $cart);

        return redirect()->to('/user');
    }

    public function cart()
    {
        return view('dashboard/cart', [
            'cart' => session()->get('cart') ?? []
        ]);
    }
}
