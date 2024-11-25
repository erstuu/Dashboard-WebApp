<?php

namespace App\Models;

use CodeIgniter\Model;

class Biodata extends Model
{
    public function getProfileData()
    {
        return $this->db->table('data_diri')
        ->select('*')
        ->get()
        ->getResultArray();
    }

    public function tambahData($data)
    {
        return $this->db->table('data_diri')
                        ->insert($data);
    }
}