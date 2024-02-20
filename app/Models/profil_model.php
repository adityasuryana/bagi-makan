<?php
namespace App\Models;

use CodeIgniter\Model;

class profil_model extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    public function getUser($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }


}
?>