<?php

namespace App\Controllers;

use App\Models\KueModel;

class Kue extends BaseController
{
    protected $kueModel;

    public function __construct()
    {
        $this->kueModel = new KueModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Kue',
            'kue'   => $this->kueModel->getKue()
        ];

        return view('kue/index', $data);
    }

    public function detail($slug)
    {

        $data = [
            'title' => 'Detail Kue',
            'kue'   => $this->kueModel->getKue($slug)
        ];
        return view('kue/detail', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        return view('kue/about', $data);
    }
}
