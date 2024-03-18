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

    public function insert_product($data)
    {
        return $this->db->table('product')->insert($data);
    }
}