<?php

namespace App\Models;

use CodeIgniter\Model;

class Mkelas extends Model
{
    protected $table            = 'kelas';
    protected $primaryKey       = 'id_kelas';
    protected $allowedFields    = ['nama_kelas', 'wali_kelas'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'kelas_created_at';
    protected $updatedField  = 'kelas_updated_at';
}
