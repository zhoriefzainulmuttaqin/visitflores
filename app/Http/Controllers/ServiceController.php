<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Payment;
use App\Models\Pattern;
use App\Models\DiscountCardSale;
use App\Models\Gift;
use App\Models\GiftSale;
use App\Models\GiftSaleItem;

class ServiceController extends Controller
{
    //
    public function product_services(){
        $gifts = Gift::orderBy("name","asc")->get();
        $patterns = Pattern::orderBy("id","asc")->get();

        $data = ([
            "patterns" => $patterns,
            "gifts" => $gifts,
        ]);

        return view("user.product_services",$data);
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
        if(Auth()->check()){
            $payments = Payment::orderBy("name","asc")->get();
            $data = ([
                "payments" => $payments
            ]);
            return view("user.beli_tourism_card",$data);
        }else{
            return redirect("login");
        }
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
    public function beli_layanan_produk($slug){
        if(Auth()->check()){
            $gift = Gift::where("slug",$slug)->first();
            $payments = Payment::orderBy("name","asc")->get();
            $data = ([
                "gift"  => $gift,
                "payments" => $payments
            ]);
            return view("user.beli_layanan_produk",$data);
        }else{
            return redirect("login");
        }
    }
    public function proses_beli_layanan_produk(Request $request){
        $sale = GiftSale::create([
            "user_id"   => Auth()->user()->id,
            "payment_id" => $request->payment,
            "date_carted"   => date("Y-m-d"),
            "time_carted" => date("H:i"),
            "buyer_name" => Auth()->user()->name,
            "buyer_phone"   => Auth()->user()->phone,
            "buyer_address" => Auth()->user()->address,
            "status" => 1
        ]);

        $gift = Gift::where("id",$request->gift_id)->first();

        $item = GiftSaleItem::create([
            "sale_id" => $sale->id,
            "gift_id" => $request->gift_id,
            "quantity" => $request->quantity,
            "price" => $request->price,
            "snapshot_name" => $gift->name,
            "snapshot_unit" => $gift->unit,
            "snapshot_price" => $gift->price,
        ]);

        return redirect("/konfirmasi-beli/".$sale->id."/layanan-produk");
    }
    public function konfirmasi_beli_layanan_produk($id) {
        $sale = GiftSale::where("id", $id)->first();

        $data = ([
            "sale"  => $sale,
        ]);

        return view("user.confirm_beli_layanan_produk",$data);
    }
    public function detail_paket_wisata($slug){
        $pattern = Pattern::where("slug",$slug)->first();

        $data = ([
            "pattern"   => $pattern,
        ]);

        return view("user.detail_paket_wisata",$data);
    }
}
