<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Payment;
use App\Models\Pattern;
use App\Models\DiscountCard;
use App\Models\DiscountCardSale;
use App\Models\DiscountCardUsed;
use App\Models\Gift;
use App\Models\GiftSale;
use App\Models\GiftSaleItem;

class ReportAdminController extends Controller
{
    //
    public function transaksi_tourism_card(){
        return view("admin/laporan_transaksi_tourism_card");
    }
    public function cetak_transaksi_tourism_card(Request $request){
        $type = $request->type;

        if($type == "date"){
            $date = $request->date;
            $rows = DiscountCardSale::where("date_carted",$date)->where("status", "success")->orderBy("id","desc")->get();

            $title = "Pada Tanggal ".tglIndo($date);
        }elseif($type == "between_date"){
            $start_date = $request->start_date;
            $end_date = $request->end_date;

            $rows = DiscountCardSale::where("date_carted",">=",$start_date)->where("date_carted","<=",$end_date)->where("status", "success")->orderBy("id","desc")->get();

            $title = "Dari Tanggal ".tglIndo($start_date)." Sampai Tanggal ".tglIndo($end_date);
        }elseif($type == "month"){
            $month = $request->month;
            $year = $request->year;

            $days_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);

            $start_date = $year."-".$month."-01";
            $end_date = $year."-".$month."-".$days_in_month;

            $rows = DiscountCardSale::where("date_carted",">=",$start_date)->where("date_carted","<=",$end_date)->where("status", "success")->orderBy("id","desc")->get();

            $title = "Pada Bulan ".getBulanIndo()[$month-1]." Tahun ".$year;
        }elseif($type == "year"){
            $year = $request->year;

            $start_date = $year."-01-01";
            $end_date = $year."-12-31";

            $rows = DiscountCardSale::where("date_carted",">=",$start_date)->where("date_carted","<=",$end_date)->where("status", "success")->orderBy("id","desc")->get();

            $title = "Pada Tahun ".$year;
        }else{
            $rows = DiscountCardSale::orderBy("id","desc")->get();

            $title = "Keseluruhan";
        }

        $data = ([
            "rows"  => $rows,
            "title" => $title
        ]);

        return view("admin/cetak_laporan_transaksi_tourism_card",$data);
    }
    public function transaksi_paket_oleholeh(){
        return view("admin/laporan_transaksi_paket_oleholeh");
    }
    public function cetak_transaksi_paket_oleholeh(Request $request){
        $type = $request->type;

        if($type == "date"){
            $date = $request->date;
            $rows = GiftSale::where("date_carted",$date)->where("status", "success")->orderBy("id","desc")->get();

            $title = "Pada Tanggal ".tglIndo($date);
        }elseif($type == "between_date"){
            $start_date = $request->start_date;
            $end_date = $request->end_date;

            $rows = GiftSale::where("date_carted",">=",$start_date)->where("date_carted","<=",$end_date)->where("status", "success")->orderBy("id","desc")->get();

            $title = "Dari Tanggal ".tglIndo($start_date)." Sampai Tanggal ".tglIndo($end_date);
        }elseif($type == "month"){
            $month = $request->month;
            $year = $request->year;

            $days_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);

            $start_date = $year."-".$month."-01";
            $end_date = $year."-".$month."-".$days_in_month;

            $rows = GiftSale::where("date_carted",">=",$start_date)->where("date_carted","<=",$end_date)->where("status", "success")->orderBy("id","desc")->get();

            $title = "Pada Bulan ".getBulanIndo()[$month-1]." Tahun ".$year;
        }elseif($type == "year"){
            $year = $request->year;

            $start_date = $year."-01-01";
            $end_date = $year."-12-31";

            $rows = GiftSale::where("date_carted",">=",$start_date)->where("date_carted","<=",$end_date)->where("status", "success")->orderBy("id","desc")->get();

            $title = "Pada Tahun ".$year;
        }else{
            $rows = GiftSale::orderBy("id","desc")->get();

            $title = "Keseluruhan";
        }

        $data = ([
            "rows"  => $rows,
            "title" => $title
        ]);

        return view("admin/cetak_laporan_transaksi_paket_oleholeh",$data);
    }
    public function penggunaan_kartu(){
        return view("admin/laporan_penggunaan_kartu");
    }
    public function penggunaan_kartu_cetak(Request $request){
        $type = $request->type;

        if($type == "date"){
            $date = $request->date;
            $rows = DiscountCardUsed::where("date_used",$date)->orderBy("id","desc")->get();

            $title = "Pada Tanggal ".tglIndo($date);
        }elseif($type == "between_date"){
            $start_date = $request->start_date;
            $end_date = $request->end_date;

            $rows = DiscountCardUsed::where("date_used",">=",$start_date)->where("date_used","<=",$end_date)->orderBy("id","desc")->get();

            $title = "Dari Tanggal ".tglIndo($start_date)." Sampai Tanggal ".tglIndo($end_date);
        }elseif($type == "month"){
            $month = $request->month;
            $year = $request->year;

            $days_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);

            $start_date = $year."-".$month."-01";
            $end_date = $year."-".$month."-".$days_in_month;

            $rows = DiscountCardUsed::where("date_used",">=",$start_date)->where("date_used","<=",$end_date)->orderBy("id","desc")->get();

            $title = "Pada Bulan ".getBulanIndo()[$month-1]." Tahun ".$year;
        }elseif($type == "year"){
            $year = $request->year;

            $start_date = $year."-01-01";
            $end_date = $year."-12-31";

            $rows = DiscountCardUsed::where("date_used",">=",$start_date)->where("date_used","<=",$end_date)->orderBy("id","desc")->get();

            $title = "Pada Tahun ".$year;
        }else{
            $rows = DiscountCardUsed::orderBy("id","desc")->get();
            $title = "Keseluruhan";
        }

        $data = ([
            "rows"  => $rows,
            "title" => $title,
        ]);

        return view("admin/cetak_laporan_penggunaan_kartu",$data);
    }
}
