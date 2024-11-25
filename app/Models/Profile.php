<?php
namespace App\Models;

use CodeIgniter\Model;

class Profile extends Model
{
    protected $table = 'profile'; // Nama tabel
    protected $primaryKey = 'nim'; // Primary key tabel
    protected $allowedFields = ['nim', 'nama', 'alamat']; // Kolom yang boleh diakses

    public function profilData()
    {
        return $this->findAll(); // Mengambil semua data dari tabel profil
    }
}