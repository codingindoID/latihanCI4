<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MAuth;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->M_auth = new MAuth();
    }

    public function index()
    {
        return view('auth/login');
    }

    public function validasi()
    {
        $data = $this->request->getVar();
        $cek = $this->M_auth->validasi($data);
        $page = ($cek['kode']  == 'success') ? 'home' : 'auth';
        return redirect()->to($page)->with($cek['kode'], $cek['msg']);
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to('auth');
    }
}
