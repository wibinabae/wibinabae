<?php
 
namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class Test_view extends Controller
{
    public function index()
    {
        $data['title']  = 'Syarif Hidayat Application';
        $data['msg1']    = 'Selamat datang di Wibinabae';
        $data['msg2']    = 'Hahahahaha';
        echo view('test_view', $data);
    }
}