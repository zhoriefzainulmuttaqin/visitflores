<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

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
        if(Cookie::get('user-language') != NULL){
            $locale = Cookie::get('user-language');
            App::setLocale($locale);
        }else{
            App::setLocale("id");
        }
        $gifts = Gift::orderBy("name","asc")->get();
        $patterns = Pattern::orderBy("id","asc")->get();

        $data = ([
            "patterns" => $patterns,
            "gifts" => $gifts,
        ]);

        return view("user.product_services",$data);
    }
    public function our_services(){
        if(Cookie::get('user-language') != NULL){
            $locale = Cookie::get('user-language');
            App::setLocale($locale);
        }else{
            App::setLocale("id");
        }
        return view("user.our_services");
    }
    public function service_consultant(){
        if(Cookie::get('user-language') != NULL){
            $locale = Cookie::get('user-language');
            App::setLocale($locale);
        }else{
            App::setLocale("id");
        }
        return view("user.service_consultant");
    }
    public function service_conceptor(){
        if(Cookie::get('user-language') != NULL){
            $locale = Cookie::get('user-language');
            App::setLocale($locale);
        }else{
            App::setLocale("id");
        }
        return view("user.service_conceptor");
    }
    public function service_marketing(){
        if(Cookie::get('user-language') != NULL){
            $locale = Cookie::get('user-language');
            App::setLocale($locale);
        }else{
            App::setLocale("id");
        }
        return view("user.service_marketing");
    }
    public function tourism_card(){
        if(Cookie::get('user-language') != NULL){
            $locale = Cookie::get('user-language');
            App::setLocale($locale);
        }else{
            App::setLocale("id");
        }
        return view("user.detail_tourism_card");
    }
    public function beli_tourism_card(){
        if(Cookie::get('user-language') != NULL){
            $locale = Cookie::get('user-language');
            App::setLocale($locale);
        }else{
            App::setLocale("id");
        }
        if(Auth()->check()){
            $payments = Payment::orderBy("name","asc")->get();
            $data = ([
                "payments" => $payments
            ]);
            return view("user.beli_tourism_card",$data);
        }else{
            return redirect("login?msg=login_first");
        }
    }
    public function proses_beli_tourism_card(Request $request){
        if(Cookie::get('user-language') != NULL){
            $locale = Cookie::get('user-language');
            App::setLocale($locale);
        }else{
            App::setLocale("id");
        }
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
        if(Cookie::get('user-language') != NULL){
            $locale = Cookie::get('user-language');
            App::setLocale($locale);
        }else{
            App::setLocale("id");
        }
        $sale = DiscountCardSale::where("id", $id)->first();

        $data = ([
            "sale"  => $sale,
        ]);

        return view("user.confirm_beli_tourism_card",$data);
    }
    public function beli_layanan_produk($slug){
        if(Cookie::get('user-language') != NULL){
            $locale = Cookie::get('user-language');
            App::setLocale($locale);
        }else{
            App::setLocale("id");
        }
        if(Auth()->check()){
            $gift = Gift::where("slug",$slug)->first();
            $payments = Payment::orderBy("name","asc")->get();
            $data = ([
                "gift"  => $gift,
                "payments" => $payments
            ]);
            return view("user.beli_layanan_produk",$data);
        }else{
            return redirect("login?msg=login_first");
        }
    }
    public function proses_beli_layanan_produk(Request $request){
        if(Cookie::get('user-language') != NULL){
            $locale = Cookie::get('user-language');
            App::setLocale($locale);
        }else{
            App::setLocale("id");
        }
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
        if(Cookie::get('user-language') != NULL){
            $locale = Cookie::get('user-language');
            App::setLocale($locale);
        }else{
            App::setLocale("id");
        }
        $sale = GiftSale::where("id", $id)->first();

        $data = ([
            "sale"  => $sale,
        ]);

        return view("user.confirm_beli_layanan_produk",$data);
    }
    public function detail_paket_wisata($slug){
        if(Cookie::get('user-language') != NULL){
            $locale = Cookie::get('user-language');
            App::setLocale($locale);
        }else{
            App::setLocale("id");
        }
        $pattern = Pattern::where("slug",$slug)->first();

        $data = ([
            "pattern"   => $pattern,
        ]);

        return view("user.detail_paket_wisata",$data);
    }
}
