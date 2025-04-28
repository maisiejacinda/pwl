<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function attemptLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Hardcoded user
        $users = [
            'admin' => [
                'username' => 'admin',
                'password' => '$2y$10$/jPBIE4a4KAXqqeqhLfd0uEFV0I/mkUZ0TxeSlNb72rfyHHNJSeL2', //admin123
                'role'     => 'admin'
            ],
            'user' => [
                'username' => 'user',
                'password' => '$2y$10$kSNiK.sbJGlwSTqKrKa4MOtYiguqUxcxWH0x4XlD9aWp.aEQ6Wg0q', //user123
                'role'     => 'user'
            ]
        ];

        foreach ($users as $u) {
            if ($username === $u['username'] && password_verify($password, $u['password'])) {
                session()->set([
                    'username' => $u['username'],
                    'role'     => $u['role'],
                    'logged_in' => true
                ]);
                return redirect()->to('/' . $u['role']);
            }
        }

        return redirect()->back()->with('error', 'Login gagal! Username atau password salah.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
