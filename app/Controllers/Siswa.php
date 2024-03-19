<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SiswaModel;

class Siswa extends BaseController
{
    protected $SiswaModel;

    //setelah form_open_multipart() di bikin. wajib membuat function ini
    public function __construct()
    {
        helper('form');
        $this->SiswaModel = new SiswaModel();
    }

    //view database
    public function index()
    {

        $data = array(
            'title' => 'Validation (Input Siswa)',
            'isi' => 'validation',
        );
        echo view('layout/wrapper', $data);
    }

    //validasi methode
    public function save()
    {
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to(base_url('siswa'));
        }
    }
}
