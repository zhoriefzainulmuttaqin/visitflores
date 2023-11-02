<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LocaleController extends Controller
{
    //
    public function set_bahasa($locale){
        $response = response("Hello");
        $minutes = 60*24*30; // Misalnya, 30 hari
        // Cookie::queue(Cookie::make('user_language', $locale, 30));
        $response->withCookie("user_language", $locale, $minutes);

        return redirect("layanan-produk");
    }
    public function atur_bahasa(Request $request){
        // echo $locale;
        // Cookie::queue(Cookie::forget("user_language"));
        // $response = $this->withCookie('color', 'blue')->get('/');
        return redirect("layanan-produk")->withCookie("color", 'blue');
        // echo $request->cookie("user_language");
    }
}
