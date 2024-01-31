<?php

namespace App\Http\Controllers;

use App\Models\Affiliators;
use App\Models\DiscountCardSale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportAffiliateController extends Controller
{
    public function transaksi_tourism_card()
    {
        return view("affiliate/laporan_transaksi_affiliate");
    }
    public function cetak_transaksi_tourism_card(Request $request)
    {
        $type = $request->type;

        if ($type == "date") {
            $date = $request->date;
            $anggota = Affiliators::where("code_reff", Auth::guard('affiliators')->user()->code_reff)->first();
            $rows = DiscountCardSale::where('code_reff', Auth::guard('affiliators')->user()->code_reff)->orderBy('date_confirmed', 'asc')->get();

            $title = "Pada Tanggal " . tglIndo($date);
            $total_commission = 0;
            $commission_idr = 0;

            foreach ($rows as $sale) {
                // Assuming commission_percent is a property of the Affiliators model
                $commission_idr = ($anggota->commission_percent / 100) * $sale->price;
                $total_commission += $commission_idr;
            }

                        // anggota
                        $anggotaAff = Affiliators::where([
                            ['location_id', Auth::guard('affiliators')->user()->location_id],
                            ['code_reff', '!=', Auth::guard('affiliators')->user()->code_reff],
                        ])->get();

                        $tourismSale = DiscountCardSale::where([
                            ['code_reff', '!=', Auth::guard('affiliators')->user()->code_reff],
                            ['status', 'success'],
                        ])->orderBy('date_confirmed', 'asc')->get();


        } elseif ($type == "between_date") {
            $start_date = $request->start_date;
            $end_date = $request->end_date;

            $anggota = Affiliators::where("code_reff", Auth::guard('affiliators')->user()->code_reff)->first();
            $rows = DiscountCardSale::where("date_carted", ">=", $start_date)->where("date_carted", "<=", $end_date)->where([
                ['code_reff', Auth::guard('affiliators')->user()->code_reff],
                ['status', 'success'],
            ])->orderBy('date_confirmed', 'asc')->get();

            $title = "Dari Tanggal " . tglIndo($start_date) . " Sampai Tanggal " . tglIndo($end_date);
            $total_commission = 0;
            $commission_idr = 0;

            foreach ($rows as $sale) {
                // Assuming commission_percent is a property of the Affiliators model
                $commission_idr = ($anggota->commission_percent / 100) * $sale->price;
                $total_commission += $commission_idr;
            }

                        // anggota
                        $anggotaAff = Affiliators::where([
                            ['location_id', Auth::guard('affiliators')->user()->location_id],
                            ['code_reff', '!=', Auth::guard('affiliators')->user()->code_reff],
                        ])->get();

                        $tourismSale = DiscountCardSale::where([
                            ['code_reff', '!=', Auth::guard('affiliators')->user()->code_reff],
                            ['status', 'success'],
                            ["date_carted", ">=", $start_date],
                            ["date_carted", "<=", $end_date],
                        ])->orderBy('date_confirmed', 'asc')->get();

        } elseif ($type == "month") {
            $month = $request->month;
            $year = $request->year;

            $days_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);

            $start_date = $year . "-" . $month . "-01";
            $end_date = $year . "-" . $month . "-" . $days_in_month;

            $anggota = Affiliators::where("code_reff", Auth::guard('affiliators')->user()->code_reff)->first();
            $rows = DiscountCardSale::where("date_carted", ">=", $start_date)->where("date_carted", "<=", $end_date)->where([
                ['code_reff', Auth::guard('affiliators')->user()->code_reff],
                ['status', 'success'],
            ])->orderBy('date_confirmed', 'asc')->get();

            $title = "Pada Bulan " . getBulanIndo()[$month - 1] . " Tahun " . $year;
            $total_commission = 0;
            $commission_idr = 0;

            foreach ($rows as $sale) {
                // Assuming commission_percent is a property of the Affiliators model
                $commission_idr = ($anggota->commission_percent / 100) * $sale->price;
                $total_commission += $commission_idr;
            }

                        // anggota
                        $anggotaAff = Affiliators::where([
                            ['location_id', Auth::guard('affiliators')->user()->location_id],
                            ['code_reff', '!=', Auth::guard('affiliators')->user()->code_reff],
                        ])->get();

                        $tourismSale = DiscountCardSale::where([
                            ['code_reff', '!=', Auth::guard('affiliators')->user()->code_reff],
                            ['status', 'success'],
                            ["date_carted", ">=", $start_date],
                            ["date_carted", "<=", $end_date],
                        ])->orderBy('date_confirmed', 'asc')->get();

        } elseif ($type == "year") {
            $year = $request->year;

            $start_date = $year . "-01-01";
            $end_date = $year . "-12-31";

            $anggota = Affiliators::where("code_reff", Auth::guard('affiliators')->user()->code_reff)->first();
            $rows = DiscountCardSale::where("date_carted", ">=", $start_date)->where("date_carted", "<=", $end_date)->where([
                ['code_reff', Auth::guard('affiliators')->user()->code_reff],
                ['status', 'success'],
            ])->orderBy('date_confirmed', 'asc')->get();

            $title = "Pada Tahun " . $year;
            $total_commission = 0;
            $commission_idr = 0;

            foreach ($rows as $sale) {
                // Assuming commission_percent is a property of the Affiliators model
                $commission_idr = ($anggota->commission_percent / 100) * $sale->price;
                $total_commission += $commission_idr;
            }

            // anggota
            $anggotaAff = Affiliators::where([
                ['location_id', Auth::guard('affiliators')->user()->location_id],
                ['code_reff', '!=', Auth::guard('affiliators')->user()->code_reff],
            ])->get();

            $tourismSale = DiscountCardSale::where([
                ['code_reff', '!=', Auth::guard('affiliators')->user()->code_reff],
                ['status', 'success'],
                ["date_carted", ">=", $start_date],
                ["date_carted", "<=", $end_date],
            ])->orderBy('date_confirmed', 'asc')->get();



        } else {
            $anggota = Affiliators::where("code_reff", Auth::guard('affiliators')->user()->code_reff)->first();
            $rows = DiscountCardSale::where([
                ['code_reff', Auth::guard('affiliators')->user()->code_reff],
                ['status', 'success'],
            ])->orderBy('date_confirmed', 'asc')->get();

            $title = "Keseluruhan";
            $total_commission = 0;
            $commission_idr = 0;

            foreach ($rows as $sale) {
                // Assuming commission_percent is a property of the Affiliators model
                $commission_idr = ($anggota->commission_percent / 100) * $sale->price;
                $total_commission += $commission_idr;
            }

            // anggota
            $anggotaAff = Affiliators::where([
                ['location_id', Auth::guard('affiliators')->user()->location_id],
                ['code_reff', '!=', Auth::guard('affiliators')->user()->code_reff],
            ])->get();

            $tourismSale = DiscountCardSale::where([
                ['code_reff', '!=', Auth::guard('affiliators')->user()->code_reff],
                ['status', 'success'],
            ])->orderBy('date_confirmed', 'asc')->get();

        }

        $data = ([
            "rows" => $rows,
            "title" => $title,
            'anggota' => $anggota,
            'total_commission' => $total_commission,
            'commission_idr' => $commission_idr,


            'anggotaAff' => $anggotaAff,
            'tourismSale' => $tourismSale,

        ]);

        return view("affiliate/cetak_laporan_transaksi_affiliate", $data);
    }
}
