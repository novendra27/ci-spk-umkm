<?php

namespace App\Controllers;

use App\Models\JenisUsahaModel;

class JenisUsaha extends BaseController
{
    protected $jenisUsahaModel;

    public function __construct()
    {
        $this->jenisUsahaModel = new JenisUsahaModel();
    }

    public function index(): string
    {
        $jenisUsaha = $this->jenisUsahaModel->getAllJenisUsaha();
        
        $data = [
            'title' => 'Home | Penentuan Bantuan UMKM',
            'jenisUsaha' => $jenisUsaha
        ];

        return view('pages/jenis_usaha', $data);
    }
}
