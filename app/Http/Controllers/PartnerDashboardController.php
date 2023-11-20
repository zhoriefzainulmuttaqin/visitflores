<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerDashboardController extends Controller
{
    //
    public function dashboard(){
        return view("partner/dashboard");
    }
}
