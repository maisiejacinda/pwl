<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        $role    = $session->get('role');
        $uri     = service('uri')->getSegment(1);

        if (! $session->get('logged_in')) {
            return redirect()->to('/login');
        }

        if ($uri === 'admin' && $role !== 'admin') {
            return redirect()->to('/user');
        }

        if ($uri === 'user' && $role !== 'user') {
            return redirect()->to('/admin');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Kosongkan jika tidak dipakai
    }
}
