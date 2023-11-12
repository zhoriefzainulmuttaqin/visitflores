<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Payment;
use App\Models\Pattern;
use App\Models\DiscountCardSale;
use App\Models\Gift;
use App\Models\GiftSale;
use App\Models\GiftSaleItem;

class TransactionAdminController extends Controller
{
    //
    public function paket_oleholeh(){
        $transactions = GiftSale::orderBy("date_carted","desc")->orderBy("id","desc")->get();

        $data = ([
            "transactions" => $transactions
        ]);
            
        return view("admin/transaksi_paketoleholeh",$data);
    }
    public function tourismcard(){
        $transactions = DiscountCardSale::orderBy("date_carted","desc")->orderBy("id","desc")->get();
        $data = ([
            "transactions" => $transactions
        ]);
            
        return view("admin/transaksi_tourismcard",$data);
    }
}
