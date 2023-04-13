<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function index($nama = '', $nim  = '')
    {
        echo "Nama $nama, NIM $nim";
    }
}
