<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function berita()
    {
        return view('user.berita');
    }

    public function detail_berita()
    {
        return view('user.detail_berita');
    }
}
