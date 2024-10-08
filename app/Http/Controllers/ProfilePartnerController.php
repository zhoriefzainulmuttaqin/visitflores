<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\Restaurant;
use App\Models\Shop;
use App\Models\Tour;
use App\Models\Accomodation;

class ProfilePartnerController extends Controller
{
    //
    public function profil(){
        if(Auth::guard('partner')->user()->type == 1){
            $type = "tour";
            $profil = Tour::where("id",Auth::guard('partner')->user()->child_id)->first();
        }elseif(Auth::guard('partner')->user()->type == 2){
            $type = "shop";
            $profil = Shop::where("id",Auth::guard('partner')->user()->child_id)->first();
        }elseif(Auth::guard('partner')->user()->type == 3){
            $type = "restaurant";
            $profil = Restaurant::where("id",Auth::guard('partner')->user()->child_id)->first();
        }elseif(Auth::guard('partner')->user()->type == 4){
            $type = "accomodation";
            $profil = Accomodation::where("id",Auth::guard('partner')->user()->child_id)->first();
        }

        $data = ([
            "type" => $type,
            "profil" => $profil
        ]);

        if($type == "tour"){
            return view("partner/data_profil_tour",$data);
        }elseif($type == "shop"){
            return view("partner/data_profil_shop",$data);
        }elseif($type == "restaurant"){
            return view("partner/data_profil_restaurant",$data);
        }elseif($type == "accomodation"){
            return view("partner/data_profil_accomodation",$data);
        }
    }
}
