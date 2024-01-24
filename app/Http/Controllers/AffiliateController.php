<?php

namespace App\Http\Controllers;

use App\Models\DiscountCardSale;
use App\Models\Payment;
use App\Models\Affiliators;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AffiliateController extends Controller
{
    public function myAffiliate(){
        $users = User::orderBy('name', 'asc')->get();
        $tourismSale = DiscountCardSale::where("code_reff",Auth::guard('affiliators')->user()->code_reff)->orderBy('date_confirmed', 'asc')->get();
        if ($tourismSale->code_reff = "K1" || $tourismSale->code_reff = "I1" || $tourismSale->code_reff = "M1" ) {
            $commission_percent = 20/100;
        } else {
            $commission_percent = 11/100;
        }
        $total_commission = 0;
        foreach ($tourismSale as $sale) {
            $commission_idr = $commission_percent * $sale->price;
            $total_commission += $commission_idr;
        }
        $data = [
            'users' => $users,
            'tourismSale' => $tourismSale,
            'commission_percent' => $commission_percent,
            'total_commission' => $total_commission,
        ];
        return view('affiliate.myAffiliate', $data);
    }

    public function anggotaAffiliate(){
        $users = User::orderBy('name', 'asc')->get();
        $anggota = Affiliators::get();
        $tourismSale = DiscountCardSale::where("code_reff",Auth::guard('affiliators')->user()->code_reff)->orderBy('date_confirmed', 'asc')->get();
        if ($tourismSale->code_reff = "K1" || $tourismSale->code_reff = "I1" || $tourismSale->code_reff = "M1" ) {
            $commission_percent = 20/100;
        } else {
            $commission_percent = 11/100;
        }
        $total_commission = 0;
        $total_pembelian = 0;
        foreach ($tourismSale as $sale) {
            $commission_idr = $commission_percent * $sale->price;
            $total_commission += $commission_idr;
        }
        $total_pembelian += $tourismSale->price;

        $data = [
            'users' => $users,
            'anggota' => $anggota,
            'tourismSale' => $tourismSale,
            'commission_percent' => $commission_percent,
            'total_commission' => $total_commission,
            'total_pembelian' => $total_pembelian,

        ];
        return view('affiliate.anggotaAffiliate', $data);
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
