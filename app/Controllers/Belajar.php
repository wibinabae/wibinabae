<?php

namespace App\Controllers;

class Belajar extends BaseController
{
    public function index()
    {
        echo view('layouts/header');
        echo view('pages/belajar');
        echo view('layouts/footer');
    }

    public function about()
    {
        echo view('layouts/header');
        echo view('about');
        echo view('layouts/footer');
    }
}
