<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkomodasiController extends Controller
{
    public function akomodasi()
    {
        return view('user.akomodasi');
    }

    public function detail_akomodasi()
    {
        return view('user.detail_akomodasi');
    }
}
