<?php

namespace App\Http\Controllers;

use App\Models\Affiliate;
use App\Models\Affiliators;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardAffiliateController extends Controller
{
    public function dashboard(){

        $affiliate = Affiliate::get();
        $affiliator = Affiliators::get();

        $data = ([
            "affiliate" => $affiliate,
            "affiliator" => $affiliator,
        ]);

        return view("affiliate/dashboard",$data);
    }


}
