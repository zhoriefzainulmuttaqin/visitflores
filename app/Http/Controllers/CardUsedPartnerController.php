<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardUsedPartnerController extends Controller
{
    //
    public function penggunaan_kartu(){
        return view("partner/penggunaan_kartu");
    }
}
