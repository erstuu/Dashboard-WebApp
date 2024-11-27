<?php

namespace App\Controllers;

use App\Models\Peserta;

class Home extends BaseController
{
    public function __construct()
    {
        $this->peserta = new Peserta();
        $this->arrayPeserta = $this->peserta->getAllPeserta();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Kicau Mania Home',
            'page' => 'home',
            'arrayPeserta' => $this->arrayPeserta
        ];

        return view('home', $data);
    }
}
