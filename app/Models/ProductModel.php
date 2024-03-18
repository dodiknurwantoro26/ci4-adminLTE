<?php

namespace App\Models;

use CodeIgniter\BaseModel;
use CodeIgniter\Model;

class ProductModel extends Model
{
    public function get_product()
    {
        //ambil semua value tabel database
        return $this->db->table('product')->get()->getResultArray();
    }

    //insert data
    public function insert_product($data)
    {
        return $this->db->table('product')->insert($data);
    }

    //edit edit
    public function edit_product($product_id)
    {
        return $this->db->table('product')->where('product_id', $product_id)->get()->getRowArray();
    }

    //update data
    public function update_product($data, $product_id)
    {
        return $this->db->table('product')->update($data, array('product_id' => $product_id));
    }

    //delete data
    public function delete_product($product_id)
    {
        return $this->db->table('product')->delete(array('product_id' => $product_id));
    }
}
