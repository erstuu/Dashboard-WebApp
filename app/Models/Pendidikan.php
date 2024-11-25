<?php
namespace App\Models;

use CodeIgniter\Model;

class Pendidikan extends Model
{
    protected $table = 'pendidikan'; // Nama tabel
    protected $primaryKey = 'id'; // Primary key tabel
    protected $allowedFields = ['id', 'nim', 'jenjang', 'instansi', 'tahun_lulus']; // Kolom yang boleh diakses

    public function pendidikanData()
    {
        return $this->findAll(); // Mengambil semua data dari tabel pendidikan
    }
}