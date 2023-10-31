<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    public function shops()
    {
        $shops = Shop::paginate(10);

        $data = [
            'shops' => $shops,
        ];

        return view('user.shops', $data);
    }
}
