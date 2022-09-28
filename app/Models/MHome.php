<?php

namespace App\Models;

use CodeIgniter\Model;

class MHome extends Model
{
    protected $table            = 'siswa';
    protected $primaryKey       = 'id_siswa';
    protected $allowedFields    = ['nama', 'alamat', 'id_kelas'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'barang_created_at';
    protected $updatedField    = 'barang_update_at';

    function rekapSiswa()
    {
        return $this->db->table('siswa')
            ->join('kelas', 'kelas.id_kelas = siswa.id_kelas')
            ->get()->getResultArray();
    }
}
