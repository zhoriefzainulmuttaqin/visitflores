<?php

namespace App\Http\Controllers;

use App\Models\Affiliate;
use App\Models\Affiliators;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardAffiliateController extends Controller
{
    public function dashboard(){

          $affiliate = Affiliate::get();
          $affiliators = Affiliators::get();

          $myEarning = Affiliate::where()

        $data = ([
            "affiliate" => $affiliate,
            "affiliators"    => $affiliators,
        ]);

        return view("affiliate/dashboard",$data);
    }}
