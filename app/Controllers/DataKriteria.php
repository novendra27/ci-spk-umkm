<?php

namespace App\Controllers;

use App\Models\DataKriteriaModel;

class DataKriteria extends BaseController
{
    protected $dataKriteriaModel;

    public function __construct()
    {
        $this->dataKriteriaModel = new DataKriteriaModel();
    }

    public function index(): string
    {
        $dataKriteria = $this->dataKriteriaModel->getAllDataKriteria();
        
        $data = [
            'title' => 'Home | Penentuan Bantuan UMKM',
            'dataKriteria' => $dataKriteria
        ];

        return view('pages/data_kriteria', $data);
    }
}
