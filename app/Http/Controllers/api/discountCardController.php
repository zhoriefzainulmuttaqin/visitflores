<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DiscountCardResource;
use App\Models\DiscountCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;




class discountCardController extends Controller
{
    /**
     */

     public function index()
     {
        $disc = DiscountCard::all();

        //return collection of disc as a resource
        return new DiscountCardResource(true, 'List Data Disc Card', $disc);
     }


}
