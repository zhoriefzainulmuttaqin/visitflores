<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class ShopController extends Controller
{
    public function shops()
    {
        $locale = Cookie::get('user-language');
        App::setLocale($locale);
        $shops = Shop::paginate(10);

        $data = [
            'shops' => $shops,
        ];

        return view('user.shops', $data);
    }
}
