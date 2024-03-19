<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UploadModel;

class Fileupload extends BaseController
{
    protected $UploadModel;

    //setelah form_open_multipart() di bikin. wajib membuat function ini
    public function __construct()
    {
        helper('form');
        $this->UploadModel = new UploadModel();
    }

    //view database
    public function index()
    {
        $data = [
            'title' => 'Page Upload Gambar',
            'data' => $this->UploadModel->get_upload(),
            'validation' => $this->validator,
            'isi' => 'upload',
        ];
        echo view('layout/wrapper', $data);
    }

    public function save()
    {
        //validasi
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to(base_url('fileupload'));
        }

        //validasi file/data yang boleh di upload
        $validated = $this->validate([
            'gambar' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/png,image/jpeg,]|max_size[gambar,2000]'
        ]);

        //validasi tipe file salah
        if ($validated ==  FALSE) {
            return $this->index();
        } else {
            //ambil gambar yang diupload
            $file_gambar = $this->request->getFile('gambar');
            //pindah file gambar setelah upload ke folder publick/upload
            $file_gambar->move(ROOTPATH . 'public/upload');

            //validasi format text untuk upload ke DB
            $data = [
                'ket' => $this->request->getPost('ket'),
                //ambil nama file saja
                'gambar' => $file_gambar->getName()
            ];

            //upload data format text
            $this->UploadModel->get_insert($data);
            return redirect()->to(base_url('fileupload'))->with('success', 'Fle Berhasil di Upload');
        }
    }
}
