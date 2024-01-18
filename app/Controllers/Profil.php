<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\profil_model;

class Profil extends Controller
{
    public function index()
    {
        $session = \Config\Services::session();

        if (!$session->has('user')) {
            return redirect()->to(base_url('login'));
        }

        return view('profil/profil_view');
    }

}
?>
