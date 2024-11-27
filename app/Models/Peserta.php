<?php

namespace App\Models;

use CodeIgniter\Model;

class Peserta extends Model
{
    protected $table = 'peserta';
    protected $primaryKey = 'id_peserta';
    protected $allowedFields = ['nama_pemilik', 'nomor_telpon', 'alamat', 'tanggal_daftar', 'nama_burung', 'jenis_burung'];

    public function savePeserta(array $data)
    {
        $this->db->table($this->table)->insert($data);
    }

    public function getAllPeserta(): array
    {
        return $this->db->table($this->table)
            ->get()
            ->getResultArray();
    }

    public function getDetailPeserta($id)
    {
        return $this->db->table($this->table)
            ->select('*')
            ->where('id_peserta', $id)
            ->get()
            ->getResultArray();
    }
}