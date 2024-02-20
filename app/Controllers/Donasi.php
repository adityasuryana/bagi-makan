<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\donasi_model;
class Donasi extends Controller
{
    public function index()
    {
        return view('donasi/donasi_view');
    }

    public function simpan()
    {  
        $validation = \Config\Services::validation();
        $data = [
            'alamat' => $this->request->getPost('alamat'),
            'tujuan' => $this->request->getPost('tujuan'),
            'penerima' => $this->request->getPost('penerima'),
            'nama_makanan' => $this->request->getPost('nama_makanan'),
            'jenis_makanan' => $this->request->getPost('jenis_makanan'),
        ];

        if ($validation->run($data, 'donasi') == FALSE) {
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('donasi'));
        } else {
            $model = new donasi_model();
            $simpanDonasi = $model->insertDonasi($data);
            if ($simpanDonasi) {
                return redirect()->to(base_url('donasi'));
            }
        }


        // helper(['form', 'url']);
         
        // $database = \Config\Database::connect();
        // $builder = $database->table('donasi');
        // $validateImage = $this->validate([
        //     'file' => [
        //         'uploaded[file]',
        //         'mime_in[file, image/png, image/jpg,image/jpeg, image/gif]',
        //         'max_size[file, 4096]',
        //     ],
        // ]);
    
        // $response = [
        //     'success' => false,
        //     'data' => '',
        //     'msg' => "Image could not upload"
        // ];
        // if ($validateImage) {
        //     $imageFile = $this->request->getFile('file');
        //     $imageFile->move(WRITEPATH . 'uploads');
        //     $data = [
        //         'img_name' => $imageFile->getClientName(),
        //         'file'  => $imageFile->getClientMimeType()
        //     ];
        //     $save = $builder->insert($data);
        //     $response = [
        //         'success' => true,
        //         'data' => $save,
        //         'msg' => "Image successfully uploaded"
        //     ];
        // }
        // return $this->response->setJSON($response);
    }

}
?>
