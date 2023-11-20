<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPartnerController extends Controller
{
    //
    public function dashboard(){
        return view("partner/dashboard");
    }
}
