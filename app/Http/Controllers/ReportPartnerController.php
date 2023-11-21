<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportPartnerController extends Controller
{
    //
    public function penggunaan_kartu(){
        return view("partner/laporan_penggunaan_kartu");
    }
}
