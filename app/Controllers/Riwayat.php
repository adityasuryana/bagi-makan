<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Riwayat extends Controller
{
    public function index()
    {
        $session = \Config\Services::session();

        if (!$session->has('user')) {
            return redirect()->to(base_url('login'));
        }

        return view('donasi/riwayat_view');
    }

}
?>
