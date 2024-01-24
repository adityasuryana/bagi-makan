<?php

namespace App\Controllers;


class Welcome extends BaseController
{
    public function index()
    {   
        $session = \Config\Services::session();

        // Pengecekan jika pengguna belum login
        if ($session->has('user')) {
            return redirect()->to(base_url('home'));
        }
        echo view('welcome');
    }
    
    
}
