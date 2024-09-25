<?php

namespace App\Controllers;

use App\Models\DataUMKMModel;

class DataUMKM extends BaseController
{
    protected $dataUMKMModel;

    public function __construct()
    {
        $this->dataUMKMModel = new DataUMKMModel();
    }

    public function index(): string
    {
        $dataUMKM = $this->dataUMKMModel->getAllDataUMKM();
        
        $data = [
            'title' => 'Home | Penentuan Bantuan UMKM',
            'dataUMKM' => $dataUMKM
        ];

        return view('pages/data_umkm', $data);
    }
}
