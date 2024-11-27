<?php

namespace App\Controllers;

use App\Models\Burung;
use App\Models\Peserta;

class Dashboard extends BaseController
{
    protected Peserta $peserta;
    private array $arrayPeserta;

    public function __construct()
    {
        $this->peserta = new Peserta();
        $this->arrayPeserta = $this->peserta->getAllPeserta();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Kicau Mania',
            'page' => 'dashboard',
            'arrayPeserta' => $this->arrayPeserta
        ];

        return view('dashboard', $data);
    }

    public function savePeserta()
    {
        $data = [
            'nama_pemilik' => $this->request->getPost('nama_pemilik'),
            'nomor_telepon' => $this->request->getPost('nomor_telepon'),
            'alamat' => $this->request->getPost('alamat'),
            'tanggal_daftar' => $this->request->getPost('tanggal_daftar'),
            'nama_burung' => $this->request->getPost('nama_burung'),
            'jenis_burung' => $this->request->getPost('jenis_burung'),
        ];

        $this->peserta->savePeserta($data);

        return redirect()->to('/dashboard');
    }

    public function detailPeserta(int $id)
    {
        $detailPeserta = $this->peserta->getDetailPeserta($id);

        return $this->response->setJSON($detailPeserta);
    }
}