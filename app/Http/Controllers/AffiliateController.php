<?php

namespace App\Http\Controllers;

use App\Models\DiscountCardSale;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AffiliateController extends Controller
{
    public function myAffiliate(){
        $users = User::orderBy('name', 'asc')->get();
        $tourismSale = DiscountCardSale::where("affiliate_id",Auth::guard('affiliators')->user()->id)->orderBy('date_confirmed', 'asc')->get();

        $data = [
            'users' => $users,
            'tourismSale' => $tourismSale,
        ];
        return view('affiliate.myAffiliate', $data);
    }

    public function beli_tourism(){
        $users = User::orderBy('name', 'asc')->get();
        $payments = Payment::orderBy('name', 'asc')->get();

        $data = [
            'users' => $users,
            'payments' => $payments,
        ];
        return view('affiliate.beliTourism', $data);
    }

    public function daftar_beli_tourism(){
        $users = User::orderBy('name', 'asc')->get();
        $payments = Payment::orderBy('name', 'asc')->get();

        $data = [
            'users' => $users,
            'payments' => $payments,
        ];
        return view('affiliate.beliTourismAccount', $data);
    }
}
