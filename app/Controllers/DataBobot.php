<?php

namespace App\Controllers;

use App\Models\DataBobotModel;

class DataBobot extends BaseController
{
    protected $dataBobotModel;

    public function __construct()
    {
        $this->dataBobotModel = new DataBobotModel();
    }

    public function index(): string
    {
        $dataBobot = $this->dataBobotModel->getAllDataBobot();
        
        $data = [
            'title' => 'Home | Penentuan Bantuan UMKM',
            'dataBobot' => $dataBobot
        ];

        return view('pages/data_bobot', $data);
    }
}
