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

    //view database
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

    //add database
    public function tambah()
    {
        $data = [
            'title' => 'Page Tambah',
            'isi' => 'product/tambah',
        ];
        echo view('layout/wrapper', $data);
    }
    // eksekusi add database
    public function save()
    {
        $data = [
            'product_name' => $this->request->getPost('product_name'),
            'product_description' => $this->request->getPost('product_description')
        ];
        $this->ProductModel->insert_product($data);
        session()->setFlashdata('success', 'Data Berhasil di Tambahkan');
        return redirect()->to(base_url('product'));
    }

    //edit value di view
    public function edit($product_id)
    {
        $data = [
            'title' => 'Page Edit',
            'product' => $this->ProductModel->edit_product($product_id),
            'isi' => 'product/edit',
        ];
        echo view('layout/wrapper', $data);
    }

    // update value untuk upload ke database
    public function update($product_id)
    {
        $data = [
            'product_name' => $this->request->getPost('product_name'),
            'product_description' => $this->request->getPost('product_description')
        ];
        $this->ProductModel->update_product($data, $product_id);
        session()->setFlashdata('success', 'Data Berhasil di update');
        return redirect()->to(base_url('product'));
    }

    //delele value database
    public function delete($product_id)
    {
        $this->ProductModel->delete_product($product_id);
        session()->setFlashdata('warning', 'Data Terhapus');
        return redirect()->to(base_url('product'));
    }
}
