<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\DiscountCardUsed;
use App\Models\Restaurant;
use App\Models\Shop;
use App\Models\Tour;
use App\Models\Accomodation;

class DashboardPartnerController extends Controller
{
    //
    public function dashboard(){
        $uses = DiscountCardUsed::where("partner_id",Auth::guard('partner')->user()->id)
        ->orderBy("date_used","desc")->orderBy("id","desc")->limit(10)->get();

        if(Auth::guard('partner')->user()->type == 1){
            $type = "Mitra Wisata";
            $profil = Tour::where("id",Auth::guard('partner')->user()->child_id)->first();
            $picture = "wisata/".$profil->picture;
        }elseif(Auth::guard('partner')->user()->type == 2){
            $type = "Mitra Oleh - oleh";
            $profil = Shop::where("id",Auth::guard('partner')->user()->child_id)->first();
            $picture = "oleh-oleh/".$profil->picture;
        }elseif(Auth::guard('partner')->user()->type == 3){
            $type = "Mitra Kuliner";
            $profil = Restaurant::where("id",Auth::guard('partner')->user()->child_id)->first();
            $picture = "kuliner/".$profil->picture;
        }elseif(Auth::guard('partner')->user()->type == 4){
            $type = "Mitra Akomodasi";
            $profil = Accomodation::where("id",Auth::guard('partner')->user()->child_id)->first();
            $picture = "akomodasi/".$profil->picture;
        }

        $data = ([
            "uses" => $uses,
            "type" => $type,
            "profil"    => $profil,
            "picture" => $picture,
        ]);

        return view("partner/dashboard",$data);
    }
}
