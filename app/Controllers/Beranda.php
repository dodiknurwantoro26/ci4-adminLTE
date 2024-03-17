<?php

namespace App\Controllers;

class Beranda extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'isi' => 'home',
        ];
        echo view('layout/wrapper', $data);
    }

    public function page1()
    {
        $data = [
            'title' => 'Page-1',
            'isi' => 'page1',
        ];
        echo view('layout/wrapper', $data);
    }

    public function page2()
    {
        $data = [
            'title' => 'Page-2',
            'isi' => 'page2',
        ];
        echo view('layout/wrapper', $data);
    }

    public function Page3()
    {
        $data = [
            'title' => 'Page-3',
            'isi' => 'page3',
        ];
        echo view('layout/wrapper', $data);
    }
}
