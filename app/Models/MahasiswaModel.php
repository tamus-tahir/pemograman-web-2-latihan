<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table            = 'tabel_mahasiswa';
    protected $primaryKey       = 'id_mahasiswa';
    protected $allowedFields    = ['nama', 'nim', 'gender', 'alamat'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
