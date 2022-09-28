<?php

namespace App\Models;

use CodeIgniter\Model;

class MAuth extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id_user';
    protected $allowedFields    = ['username', 'password', 'display_name', 'level'];

    function validasi($data)
    {
        $where = [
            'username'      => $data['username'],
            'password'      => md5($data['password']),
        ];

        $cek = $this->db->table('users')->getWhere($where)->getRow();
        if ($cek) {
            $newdata = [
                'kevin_username'    => $cek->username,
                'kevin_level'       => $cek->level,
                'kevin_display'     => $cek->display_name,
                'kevin_login'       => true,
            ];

            session()->set($newdata);
            return [
                'kode'      => 'success',
                'msg'       => "selamat datang kembali $cek->username"
            ];
        } else {
            return [
                'kode'      => 'error',
                'msg'       => "username atau password salah"
            ];
        }
    }
}
