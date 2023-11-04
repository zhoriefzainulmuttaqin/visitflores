<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class RestaurantController extends Controller
{
    public function restaurants()
    {
        $locale = Cookie::get('user-language');
        App::setLocale($locale);
        $restaurants = Restaurant::paginate(10);

        $data = [
            'restaurants' => $restaurants,
        ];

        return view('user.restaurants', $data);
    }
}
