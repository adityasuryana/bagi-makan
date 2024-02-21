<?php
namespace App\Models;

use CodeIgniter\Model;

class donasi_model extends Model
{
    protected $table = 'donasi';

    public function getDonasi($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function insertDonasi($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    

}
?>