<?php

namespace App\Http\Controllers;

use App\Models\Affiliate;
use App\Models\Affiliators;
use App\Models\DiscountCardSale;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardAffiliateController extends Controller
{
    public function dashboard()
    {
        $jmlAnggota = 0;
        $jmlAnggota = Affiliators::where([
            ['location_id', Auth::guard('affiliators')->user()->location_id],
            ['code_reff', '!=', Auth::guard('affiliators')->user()->code_reff],
        ])->count();


        $mydata = Affiliators::where("code_reff", Auth::guard('affiliators')->user()->code_reff)->first();
        $myTransaction = DiscountCardSale::whereHas('affiliators', function ($query) {
            $query->where('location_id', Auth::guard('affiliators')->user()->location_id);
        })
        ->where('status', 'success')
        ->orderBy('date_confirmed', 'asc')
        ->get();

        $affiliators = Affiliators::where([
            ['location_id', Auth::guard('affiliators')->user()->location_id],
        ])->get();

        $anggota = Affiliators::where([
            ['location_id', Auth::guard('affiliators')->user()->location_id],
            ['code_reff', '!=', Auth::guard('affiliators')->user()->code_reff],
        ])->get();

        $tourismSale = DiscountCardSale::where([
            ['code_reff', '=', Auth::guard('affiliators')->user()->code_reff],
            ['status', 'success'],
        ])->orderBy('date_confirmed', 'asc')->get();
        $tourismSaleAnggota = DiscountCardSale::where([
            ['code_reff', '!=', Auth::guard('affiliators')->user()->code_reff],
            ['status', 'success'],
        ])->orderBy('date_confirmed', 'asc')->get();


        $myCommission = 0;
        $myCommission_idr = 0;
        $Commissions = []; // Initialize $Commissions as an array

        foreach ($tourismSale as $trans) {
            // Assuming commission_percent is a property of the Affiliators model
            $myCommission_idr = ($mydata->commission_percent / 100) * $trans->price;
            $myCommission += $myCommission_idr;
        }

        // Initialize an array to keep track of Commissions for each code_reff
        $Commissions = [];

        foreach ($affiliators as $aff) {
            $total_commission = 0;
            $commission = (20 / 100);
            $share_commission = 0;
            $commission_idr = 0;
            $your_commission_idr = 0;
            $total_your_commission = 0;

            foreach ($myTransaction as $sale) {
                // Check if the current sale belongs to the current affiliate (code_reff)
                if ($sale->code_reff == $aff->code_reff) {
                    // Assuming commission_percent is a property of the Affiliators model
                    $commission_idr = ($aff->commission_percent / 100) * $sale->price;
                    $total_commission += $commission_idr;

                    $share_commission = $commission - ($aff->commission_percent / 100);
                    $your_commission_idr = $share_commission * $sale->price;
                    $total_your_commission += $your_commission_idr;

                    // Store the your_commission_idr in the associative array
                    $yourCommissions[$aff->code_reff] = $total_your_commission;
                }
            }

            // Store the commission_idr in the associative array
            $Commissions[$aff->code_reff] = $commission_idr;

            // Store the total commission in the associative array
            if ($aff->code_reff != Auth::guard('affiliators')->user()->code_reff) {
                // Store the total commission in the associative array
                $totalCommissions[$aff->code_reff] = $total_commission;
            }        }

        return view("affiliate/dashboard", compact('jmlAnggota', 'totalCommissions', 'myCommission', 'yourCommissions', 'mydata', 'myTransaction', 'Commissions', ));

    }


}
