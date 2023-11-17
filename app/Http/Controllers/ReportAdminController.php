<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Payment;
use App\Models\Pattern;
use App\Models\DiscountCard;
use App\Models\DiscountCardSale;
use App\Models\Gift;
use App\Models\GiftSale;
use App\Models\GiftSaleItem;

class ReportAdminController extends Controller
{
    //
    public function transaksi_tourism_card(){
        return view("admin/laporan_transaksi_tourism_card");
    }
    public function transaksi_paket_oleholeh(){
        return view("admin/laporan_transaksi_paket_oleholeh");
    }
}
