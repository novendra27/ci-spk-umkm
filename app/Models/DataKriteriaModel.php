<?php

namespace App\Models;

use CodeIgniter\Model;

class DataKriteriaModel extends Model
{
    protected $table      = 'tb_data_kriteria';
    protected $primaryKey = 'id_data_kriteria';
    protected $allowedFields = ['id_kriteria', 'id_bobot', 'nama_bobot', 'nilai_bobot'];

    public function getAllDataKriteria()
    {
        return $this->select('tb_data_bobot.kode_kriteria, tb_data_bobot.nama_kriteria, tb_data_kriteria.nama_bobot, tb_data_kriteria.nilai_bobot')
            ->join('tb_data_bobot', 'tb_data_bobot.id_bobot = tb_data_kriteria.id_bobot')
            ->findAll();
    }
}
