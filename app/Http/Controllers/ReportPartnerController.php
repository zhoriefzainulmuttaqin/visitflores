<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\DiscountCardUsed;
use App\Models\Restaurant;
use App\Models\Shop;
use App\Models\Tour;
use App\Models\Accomodation;

class ReportPartnerController extends Controller
{
    //
    public function penggunaan_kartu(){
        return view("partner/laporan_penggunaan_kartu");
    }
    public function penggunaan_kartu_cetak(Request $request){
        $type = $request->type;

        if($type == "date"){
            $date = $request->date;
            $rows = DiscountCardUsed::where("partner_id",Auth::guard('partner')->user()->id)->where("date_used",$date)->orderBy("id","desc")->get();

            $title = "Pada Tanggal ".tglIndo($date);
        }elseif($type == "between_date"){
            $start_date = $request->start_date;
            $end_date = $request->end_date;

            $rows = DiscountCardUsed::where("partner_id",Auth::guard('partner')->user()->id)->where("date_used",">=",$start_date)->where("date_used","<=",$end_date)->orderBy("id","desc")->get();

            $title = "Dari Tanggal ".tglIndo($start_date)." Sampai Tanggal ".tglIndo($end_date);
        }elseif($type == "month"){
            $month = $request->month;
            $year = $request->year;

            $days_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);

            $start_date = $year."-".$month."-01";
            $end_date = $year."-".$month."-".$days_in_month;

            $rows = DiscountCardUsed::where("partner_id",Auth::guard('partner')->user()->id)->where("date_used",">=",$start_date)->where("date_used","<=",$end_date)->orderBy("id","desc")->get();

            $title = "Pada Bulan ".getBulanIndo()[$month-1]." Tahun ".$year;
        }elseif($type == "year"){
            $year = $request->year;

            $start_date = $year."-01-01";
            $end_date = $year."-12-31";

            $rows = DiscountCardUsed::where("partner_id",Auth::guard('partner')->user()->id)->where("date_used",">=",$start_date)->where("date_used","<=",$end_date)->orderBy("id","desc")->get();

            $title = "Pada Tahun ".$year;
        }else{
            $rows = DiscountCardUsed::where("partner_id",Auth::guard('partner')->user()->id)->orderBy("id","desc")->get();
            $title = "Keseluruhan";
        }

        if(Auth::guard('partner')->user()->type == 1){
            $myData = Tour::where("id",Auth::guard('partner')->user()->child_id)->first();
        }elseif(Auth::guard('partner')->user()->type == 2){
            $myData = Shop::where("id",Auth::guard('partner')->user()->child_id)->first();
        }elseif(Auth::guard('partner')->user()->type == 3){
            $myData = Restaurant::where("id",Auth::guard('partner')->user()->child_id)->first();
        }elseif(Auth::guard('partner')->user()->type == 4){
            $myData = Accomodation::where("id",Auth::guard('partner')->user()->child_id)->first();
        }

        $data = ([
            "rows"  => $rows,
            "title" => $title,
            "name"  => $myData->name,
        ]);

        return view("partner/cetak_laporan_penggunaan_kartu",$data);
    }
}
