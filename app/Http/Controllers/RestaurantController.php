<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function restaurants()
    {
        $restaurants = Restaurant::paginate(10);

        $data = [
            'restaurants' => $restaurants,
        ];

        return view('user.restaurants', $data);
    }
}
