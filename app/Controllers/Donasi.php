<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\donasi_model;
use App\Models\profil_model;

class Donasi extends Controller
{
    public function index()
    {
        $session = \Config\Services::session();

        if (!$session->has('user')) {
            return redirect()->to(base_url('login'));
        }

        return view('donasi/donasi_view');
    }

}
?>
