<?php

namespace App\Models;

use CodeIgniter\BaseModel;
use CodeIgniter\Model;

class UploadModel extends Model
{
    public function get_upload()
    {
        //ambil semua value tabel database
        return $this->db->table('tbl_upload')->get()->getResultArray();
    }

    public function get_insert($data)
    {
        //ambil semua value tabel database
        return $this->db->table('tbl_upload')->insert($data);
    }
}
