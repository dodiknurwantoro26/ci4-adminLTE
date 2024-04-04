<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UploadsModel;

class Uploads extends BaseController
{
    //variable global
    protected $UploadsModel;

    //setelah form_open_multipart() di bikin. wajib membuat function ini
    public function __construct()
    {
        helper('form');
        $this->UploadsModel = new UploadsModel();
    }

    //view database
    public function index()
    {

        $data = [
            'title' => 'Multi Uploads',
            'isi' => 'v_uploads',
        ];
        echo view('layout/wrapper', $data);
    }

    public function save()
    {
        $judul = $this->request->getPost('judul');
        $files = $this->request->getFile('');

        if ($files) {
            $random = rand(000, 999);
            $data_uploads = [
                'id' => $random,
                'judul' => $judul,
            ];
            $this->UploadsModel->insert_upload($data_uploads);

            foreach ($files['file_upload'] as $key => $img) {
                $data_galery = [
                    'id_upload' => $random,
                    'gambar' => $img->getRandomName(),
                ];
                $this->UploadsModel->insert_galeries($$data_galery);
                $img->move(ROOTPATH . 'public/uploads', $img->getRandomName());
            }
            session()->setFlashdata('success', 'Data berhasil Upload');
            return redirect()->to(base_url('uploads/index'));
        }
    }
}
