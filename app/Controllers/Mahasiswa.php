<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $MahasiswaModel;

    public function __construct()
    {
        $this->MahasiswaModel = new MahasiswaModel();
    }

    //view database
    public function index()
    {
        $data = [
            'title' => 'Page Mahasiswa system Join Database',
            //panggil hasil value database untuk di kirim ke 'product/list.php'
            'mahasiswa' => $this->MahasiswaModel->get_mahasiswa(),
            'isi' => 'v_mahasiswa',
        ];
        echo view('layout/wrapper', $data);
    }
}
