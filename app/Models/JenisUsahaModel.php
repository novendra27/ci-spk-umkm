<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisUsahaModel extends Model
{
    protected $table      = 'tb_jenis_usaha';
    protected $primaryKey = 'id_jenis_usaha';

    public function getAllJenisUsaha()
    {
        return $this->findAll();
    }
}
