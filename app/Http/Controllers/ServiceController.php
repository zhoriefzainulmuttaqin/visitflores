<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Payment;
use App\Models\DiscountCardSale;

class ServiceController extends Controller
{
    //
    public function product_services(){
        return view("user.product_services");
    }
    public function our_services(){
        return view("user.our_services");
    }
    public function service_consultant(){
        return view("user.service_consultant");
    }
    public function service_conceptor(){
        return view("user.service_conceptor");
    }
    public function service_marketing(){
        return view("user.service_marketing");
    }
    public function tourism_card(){
        return view("user.detail_tourism_card");
    }
    public function beli_tourism_card(){
        $payments = Payment::orderBy("name","asc")->get();
        $data = ([
            "payments" => $payments
        ]);
        return view("user.beli_tourism_card",$data);
    }
    public function proses_beli_tourism_card(Request $request){
        $sale = DiscountCardSale::create([
            "user_id"   => Auth()->user()->id,
            "payment_id" => $request->payment,
            "quantity" => $request->quantity,
            "price" => $request->price,
            "date_carted"   => date("Y-m-d"),
            "time_carted" => date("H:i"),
            "status" => 1
        ]);

        return redirect("/konfirmasi-beli/".$sale->id."/tourism-card");
    }
    public function konfirmasi_beli_tourism_card($id) {
        $sale = DiscountCardSale::where("id", $id)->first();

        $data = ([
            "sale"  => $sale,
        ]);

        return view("user.confirm_beli_tourism_card",$data);
    }
}
