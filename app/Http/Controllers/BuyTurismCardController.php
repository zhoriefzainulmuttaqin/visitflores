<?php

namespace App\Http\Controllers;

use App\Models\DiscountCard;
use App\Models\DiscountCardSale;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class BuyTurismCardController extends Controller
{
    public function process(Request $request)
    {
        $data = $request->all();

        $transaction = DiscountCardSale::create([
            'user_id' => Auth::user()->id,
            'price' => 25000,
            'quantity' => 1,
            'status' => 'pending',
            'code_reff' => $data['code_reff'],
            "date_carted" => date("Y-m-d"),
            "time_carted" => date("H:i"),

        ]);
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $transaction->price, // Menggunakan price dari transaction
            ),
            'customer_details' => array(
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $transaction->snap_token = $snapToken;
        $transaction->save();
        return redirect()->route('checkout', $transaction->id);
    }

    public function checkout(DiscountCardSale $transaction)
    {


        $products = DiscountCardSale::findOrFail($transaction->id)->get()->first();
        $product = collect($products)->firstWhere('id', $transaction->id);
        return view('user.confirm_beli_tourism_card', compact('transaction', 'product', 'products'));
    }

    public function success(DiscountCardSale $transaction)
    {

        $transaction->status = 'success';
        $transaction->save();
        return view('user.success_order', compact('transaction'));
    }

    public function generate_discount_card_user(Request $request){
        $sale_id = $request->sale_id;

        $sale = DiscountCardSale::where("id",$sale_id)->first();

        if(!$sale){
            session()->flash('msg', "<b>Gagal</b> <br> Data tidak ditemukan");
            session()->flash('msg_status', 'error');

            return redirect("app-admin/transaksi/tourism-card");
        }

        $dateNow = date("Y-m-d");
        $timeNow = date("H:i");

        for($c = 1; $c <= $sale->quantity; $c++){
            $newCard = DiscountCard::create([
                "user_id"   => $sale->user_id,
                "sale_id" => $sale_id,
                "code"  => "(kosong)",
                "owner_name" => $sale->user->name,
                "owner_phone" => $sale->user->phone,
                "owner_email" => $sale->user->email,
                "date_created"  => $dateNow,
                "time_created" => $timeNow,
            ]);

            $firstNumberCode = rand(1000,9999);
            $secondNumberCode = rand(1000,9999);
            $thirdNumberCode = rand(1000,9999);

            if($newCard->id < 10){
                $fourthNumberCode = "000".$newCard->id;
            }elseif($newCard->id < 100){
                $fourthNumberCode = "00".$newCard->id;
            }elseif($newCard->id < 1000){
                $fourthNumberCode = "0".$newCard->id;
            }else{
                $fourthNumberCode = $newCard->id;
            }

            $newCardCode = $firstNumberCode.$secondNumberCode.$thirdNumberCode.$fourthNumberCode;

            DiscountCard::where("id",$newCard->id)->update([
                "code"  => $newCardCode,
            ]);
        }
        $sale->save();


        return redirect("/checkout/success/" . $sale->id);
    }
}
