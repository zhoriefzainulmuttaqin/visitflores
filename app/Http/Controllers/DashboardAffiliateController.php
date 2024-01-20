<?php

namespace App\Http\Controllers;

use App\Models\Affiliate;
use App\Models\Affiliators;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardAffiliateController extends Controller
{
    public function dashboard(){
        // $uses = DiscountCardUsed::where("partner_id",Auth::guard('partner')->user()->id)
        // ->orderBy("date_used","desc")->orderBy("id","desc")->limit(10)->get();

          $affiliate = Affiliate::get();
          $affiliators = Affiliators::get();

        $data = ([
            "affiliate" => $affiliate,
            "affiliators"    => $affiliators,
        ]);

        return view("affiliate/dashboard",$data);
    }}
