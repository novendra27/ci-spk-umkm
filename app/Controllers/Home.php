<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home | Penentuan Bantuan UMKM'
        ];
        return view('pages/home', $data);
    }
}
