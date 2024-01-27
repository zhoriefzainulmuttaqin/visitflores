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
        $anggota = Affiliators::where("code_reff", Auth::guard('affiliators')->user()->code_reff)->first();
        $tourismSale = DiscountCardSale::where([
            ['code_reff', Auth::guard('affiliators')->user()->code_reff],
            ['status', 'success'],
        ])->orderBy('date_confirmed', 'asc')->get();

        $total_commission = 0;
        $commission_idr = 0;

        foreach ($tourismSale as $sale) {
            // Assuming commission_percent is a property of the Affiliators model
            $commission_idr = ($anggota->commission_percent/100) * $sale->price;
            $total_commission += $commission_idr;
        }

        $data = [
            'anggota' => $anggota,
            'tourismSale' => $tourismSale,
            'total_commission' => $total_commission,
            'commission_idr' => $commission_idr,
        ];

        return view('affiliate.myAffiliate', $data);
    }

    public function anggotaAffiliate()
    {
        $anggota = Affiliators::where([
            ['location_id', Auth::guard('affiliators')->user()->location_id],
            ['code_reff', '!=', Auth::guard('affiliators')->user()->code_reff],
        ])->get();

        $tourismSale = DiscountCardSale::where([

            ['status', 'success'],
        ])->orderBy('date_confirmed', 'asc')->get();

        $data = [];

        foreach ($anggota as $aff) {
            $total_commission = 0;
            $commission = 20/100;
            $share_commission = 0;
            $total_your_commission = 0;

            foreach ($tourismSale as $sale) {
                $commission_idr = ($aff->commission_percent / 100) * $sale->price;
                $total_commission += $commission_idr;

                $share_commission = $commission - ($aff->commission_percent / 100);
                $your_commission_idr = $share_commission  * $sale->price;
                $total_your_commission += $your_commission_idr;

            }

            $data[] = [
                'anggota' => $aff, // Change $anggota to $aff to pass individual affiliate data
                'tourismSale' => $tourismSale,
                'commission_idr' => $commission_idr,
                'your_commission_idr' => $your_commission_idr,
                'total_commission' => $total_commission,
                'total_your_commission' => $total_your_commission,
            ];
        }

        return view('affiliate.anggotaAffiliate')->with('data', $data);
    }

    public function detailAnggota(Request $request)
    {
        $anggota = Affiliators::where('id', $request->id)->first();
        $tourismSale = DiscountCardSale::where([
            ['id', $request->id],
            ['code_reff',$request->code_reff],
            ['status', 'success'],
        ])->orderBy('date_confirmed', 'asc')->get();

        $total_commission = 0;
        $commission_idr = 0;

        foreach ($tourismSale as $sale) {
            // Assuming commission_percent is a property of the Affiliators model
            $commission_idr = ($anggota->commission_percent/100) * $sale->price;
            $total_commission += $commission_idr;
        }

        $data = [
            'anggota' => $anggota,
            'tourismSale' => $tourismSale,
            'total_commission' => $total_commission,
            'commission_idr' => $commission_idr,
        ];

        return view('affiliate.detailAnggota', $data);
    }


}
