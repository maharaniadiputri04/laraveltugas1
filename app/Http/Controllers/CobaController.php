<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index ()
    {
        return 'test berhasil';
    }

    public function urutan ($ke)
    {
        $numbers = [
            ['ke' => $ke, 'nomor' => 24],
            ['ke' => $ke, 'nomor' => 34],
            ['ke' => $ke, 'nomor' => 44],
        ];
        
        return view('urutan', compact('numbers'));
    }

    public function coba($ke)
    {
        return view('coba', ['ke' => $ke]);
    }
}
