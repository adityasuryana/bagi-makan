<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\donasi_model;
class Riwayat extends Controller
{
    public function index()
    {
        $model = new donasi_model();
        $donasi = $model->getDonasi();
        $data = [
            'donasi' => $donasi,
        ];
        return view('donasi/riwayat_view', $data);
    }

}
?>
