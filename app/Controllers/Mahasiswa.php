<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $mahasiswaModel = new \App\Models\MahasiswaModel();
        $data = [
            'mahasiswa' => $mahasiswaModel->findAll(),
        ];

        return view('mahasiswa/index', $data);
    }
}
