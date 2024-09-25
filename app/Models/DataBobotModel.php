<?php

namespace App\Models;

use CodeIgniter\Model;

class DataBobotModel extends Model
{
    protected $table      = 'tb_data_bobot';
    protected $primaryKey = 'id_data_bobot';

    public function getAllDataBobot()
    {
        return $this->findAll();
    }
}
