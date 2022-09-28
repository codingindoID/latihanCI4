<?php

namespace App\Controllers;

use App\Models\MHome;
use App\Models\Mkelas;

class Home extends BaseController
{
    public function __construct()
    {
        $this->Mhome = new MHome();
        $this->Mkelas = new Mkelas();
    }

    function tes()
    {
        $data = [
            'title'     => 'Home',
            'sub'       => '',
            'icon'       => 'icofont-home',
            'active'    => 'tes',
        ];
        $this->template->render('home/tes', $data);
    }

    public function index()
    {
        $data = [
            'title'     => 'Menu',
            'sub'       => 'home',
            'icon'      => 'icofont-attachment',
            'active'    => 'home',
            'kelas'     => $this->Mkelas->findall(),
            'rekap'     => $this->Mhome->rekapSiswa()
        ];
        $this->template->render('home/index', $data);
    }

    function form()
    {
        $data = [
            'title'     => 'Menu',
            'sub'       => 'input',
            'icon'      => 'icofont-calendar',
            'active'    => 'input',
            'kelas'     => $this->Mkelas->findall()
        ];
        $this->template->render('home/form', $data);
    }

    function hapus($id)
    {
        $this->Mhome->delete($id);
        return redirect()->to('/')->with('success', 'sukses hapus data');
    }

    function simpan()
    {
        $data = $this->request->getVar();
        $this->Mhome->save($data);
        return redirect()->to('/')->with('success', 'sukses tambah data');
    }

    function detil($id)
    {
        $data = [
            'title'     => 'Menu',
            'sub'       => 'edit',
            'icon'      => 'icofont-calendar',
            'active'    => 'input',
            'kelas'     => $this->Mkelas->findall(),
            'detil'     => $this->Mhome->find($id)
        ];
        $this->template->render('home/form_edit', $data);
    }

    function ajaxDetil($id)
    {
        $data = $this->Mhome->find($id);
        echo json_encode($data);
    }
}
