<?php

namespace App\Models;

use CodeIgniter\BaseModel;
use CodeIgniter\Model;

class SiswaModel extends Model
{
    public function insert_siswa($data)
    {
        //ambil semua value tabel database
        return $this->db->table('tbl_siswa')->insert($data);
    }

    public function get_upload()
    {
        //ambil semua value tabel database
        return $this->db->table('tbl_siswa')->get()->getResultArray();
    }
}
