<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductModel;

class Product extends BaseController
{
    protected $ProductModel;

    public function __construct()
    {
        $this->ProductModel = new ProductModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Page Product',
            //panggil hasil value database untuk di kirim ke 'product/list.php'
            'product' => $this->ProductModel->get_product(),
            'isi' => 'product/list',
        ];
        echo view('layout/wrapper', $data);
    }
}
