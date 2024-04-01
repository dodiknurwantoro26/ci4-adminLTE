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
            'isi' => 'v_validation',
        );
        echo view('layout/wrapper', $data);
    }

    //validasi methode
    public function save()
    {
        // load file Validation di folder /config
        $validation = \config\Services::validation();

        //mengambil file upload
        $image = $this->request->getFile('foto_siswa');

        //merandom file yang diupload
        $name = $image->getRandomName();

        //validasi data
        $data = [
            'nis' => $this->request->getPost('nis'),
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'foto_siswa' => $name,
        ];

        if ($validation->run($data, 'siswa') == false) {
            session()->getFlashdata('inputs', $this->request->getPost());
            session()->getFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('siswa/index'));
        } else {
            $image->move(ROOTPATH, 'public/img_siswa');
            $this->SiswaModel->insert_siswa($data);
            session()->getFlashdata('succes', 'Data Berhasil di Tambah');
            return redirect()->to(base_url('product'));
        }
    }
}
