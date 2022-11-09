<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Postingan extends BaseController
{
    public function index()
    {
        return view('pages/postingan');
    }
}
