<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home | Penentuan Bantuan UMKM'
        ];
        return view('pages/home', $data);
    }

    public function jenis_usaha(): string
    {
        $data = [
            'title' => 'Jenis Usaha | Penentuan Bantuan UMKM'
        ];
        return view('pages/jenis_usaha', $data);
    }

    public function data_umkm(): string
    {
        $data = [
            'title' => 'Data UMKM | Penentuan Bantuan UMKM'
        ];
        return view('pages/data_umkm', $data);
    }

    public function data_kriteria(): string
    {
        $data = [
            'title' => 'Data Kriteria | Penentuan Bantuan UMKM'
        ];
        return view('pages/data_kriteria', $data);
    }

    public function data_bobot(): string
    {
        $data = [
            'title' => 'Data Bobot | Penentuan Bantuan UMKM'
        ];
        return view('pages/data_bobot', $data);
    }
}
