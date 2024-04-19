<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UploadsModel;

class Multiupload extends BaseController
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
            'data' => $this->UploadsModel->view_galeries(),
            'isi' => 'v_uploads',
        ];
        echo view('layout/wrapper', $data);
    }

    public function save()
    {

        $judul = $this->request->getPost('judul');
        $files = $this->request->getFiles('');

        $data_upload = [
            'judul' => $this->request->getPost('judul'),
        ];
        $data_galeries = [
            'gambar' => $this->request->getPost('gambar'),
        ];

        // $namafile=null;

        // if($files->getPath())
        //     {
        //     if(!$files->hasMoved())
        //     {
        //         $namafile="img-".getGUID().''.''.$files->getExtension();

        //         if(file_exists(FCPATH.$this->uploadFolder.$namafile))
        //     {
        //      $filelama = new File(FCPATH.$this->uploadFolder.$namafile);
        //      $filelama->move(FCPATH.$this->uploadFolder."backup/",$filelama->
        //      getBasename($files->getExtension()).date("YmdHms").''.''.$files->getExtension());
        //     }
        //     $files->move(FCPATH.$this->uploadFolder,$namafile);
        //     }

        // }

        // ## code lama ##
        if ($files) {
            $random = rand(000, 999);
            $data_uploads = [
                'id_upload' => $random,
                'judul' => $judul,
            ];
            $this->UploadsModel->insert_upload($data_uploads);

            foreach ($files['file_upload'] as $key => $img) {
                $data_galery = [
                    'id_upload' => $random,
                    'gambar' => $namefile = $img->getRandomName(),
                ];
                $this->UploadsModel->insert_galeries($data_galery);
                $img->move(ROOTPATH . 'public/multi_uploads', $namefile);
            }
            $this->UploadsModel->view_upload($data_upload);
            $this->UploadsModel->view_galeries($data_galeries);
            session()->setFlashdata('success', 'File Berhasil Upload');
            return redirect()->to(base_url('multiupload/index'));
        }
    }
}
