<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function profile($nama="",$npm="",$kelas="")
    {
        $data = [
            // 'nama' => 'Jihan Haya Mufialdo',
            // 'npm' => '2117051095',
            // 'kelas' => 'D'
            'nama' => $nama,
            'npm' => $npm,
            'kelas' => $kelas
        ];
        return view('profile',$data);
    }

}
