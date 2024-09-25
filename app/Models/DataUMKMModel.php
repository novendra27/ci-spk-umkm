<?php

namespace App\Models;

use CodeIgniter\Model;

class DataUMKMModel extends Model
{
    protected $table      = 'tb_data_umkm';
    protected $primaryKey = 'id_data_umkm';
    protected $allowedFields = ['id_data_umkm', 'id_jenis_usaha', 'nama_usaha', 'nama_pimpinan', 'jalan', 'desa', 'kecamatan'];

    public function getAllDataUMKM()
    {
        return $this->select('tb_data_umkm.nama_usaha, tb_data_umkm.nama_pimpinan, tb_data_umkm.jalan, tb_data_umkm.desa, tb_data_umkm.kecamatan, tb_jenis_usaha.nama_jenis_usaha')
            ->join('tb_jenis_usaha', 'tb_jenis_usaha.id_jenis_usaha = tb_data_umkm.id_jenis_usaha')
            ->findAll();
    }
}
