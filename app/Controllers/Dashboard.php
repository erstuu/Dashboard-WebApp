<?php

namespace App\Controllers;

use App\Models\Biodata;

class Dashboard extends BaseController
{
    protected Biodata $bio;
    private array $data_diri;

    public function __construct()
    {
        $this->bio = new Biodata();
        $this->data_diri = $this->bio->getProfileData();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Biodataku | Informatika UMMI',
            'page' => 'dashboard',
            'dataDiri' => $this->data_diri
        ];

        return view('dashboard', $data);
    }

    public function tambahData(): string
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'nim' => $this->request->getPost('nim'),
            'email' => $this->request->getPost('email'),
            'tahun_masuk' => $this->request->getPost('tahun_masuk'),
        ];

        $this->bio->tambahData($data);

        return $this->index();
    }
}