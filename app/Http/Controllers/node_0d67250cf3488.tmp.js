<?php

namespace App\Http\Controllers;

use App\Models\DiscountCard;
use App\Models\DiscountCardSale;
use App\Models\Payment;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TransactionAffiliate extends Controller
{
    public function konfirmasi(Request $request)
    {
        $user = User::first();

        $user_id = $request->user_id;
        $code_reff = $request->code_reff;
        $email = $user->email;
        $name = $user->name;

        $transaction = DiscountCardSale::create([
            'user_id' => $user_id,
            'price' => 25000,
            'quantity' => 1,
            'status' => 'pending',
            'code_reff' => $code_reff,
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
                'first_name' => $name,
                'email' => $email,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $transaction->snap_token = $snapToken;
        $transaction->save();
        return redirect()->route('pembayaran', $transaction->id);
    }

    public function beli_tourism(Transaction $transaction)
    {
        $users = User::orderBy('name', 'asc')->get();
        $products = DiscountCardSale::all();
        $product = collect($products)->firstWhere('id', $transaction->discountcardsales_id);

        $data  = [
            'transaction' => $transaction,
            'users' => $users,
            'products' => $products,
            'product' => $product,
        ];
        return view('affiliate.beliTourism', $data);
    }

    public function konfirmasi_tourism(DiscountCardSale $transaction)
    {
        $users = User::orderBy('name', 'asc')->get()->first();

        $products = DiscountCardSale::findOrFail($transaction->id)->get()->first();
        $product = collect($products)->firstWhere('id', $transaction->id);

        $data = [
            'transaction' => $transaction,
            'users' => $users,
            'product' => $product, 
        ];
        return view('affiliate.konfirmasiPembayaran', $data);
    }

    public function pembayaran()
    {
        $users = User::orderBy('name', 'asc')->first();

        $data = [
            'users' => $users,
        ];
        return view('affiliate.beliTourism', $data);
    }

    public function generate_discount_card_user(Request $request)
    {
        $sale_id = $request->sale_id;

        $sale = DiscountCardSale::where("id", $sale_id)->first();

        if (!$sale) {
            session()->flash('msg', "<b>Gagal</b> <br> Data tidak ditemukan");
            session()->flash('msg_status', 'error');

            return redirect("app-admin/transaksi/tourism-card");
        }

        $dateNow = date("Y-m-d");
        $timeNow = date("H:i");

        for ($c = 1; $c <= $sale->quantity; $c++) {
            $newCard = DiscountCard::create([
                "user_id" => $sale->user_id,
                "sale_id" => $sale_id,
                "code" => "(kosong)",
                "owner_name" => $sale->user->name,
                "owner_phone" => $sale->user->phone,
                "owner_email" => $sale->user->email,
                "date_created" => $dateNow,
                "time_created" => $timeNow,
            ]);

            $firstNumberCode = rand(1000, 9999);
            $secondNumberCode = rand(1000, 9999);
            $thirdNumberCode = rand(1000, 9999);

            if ($newCard->id < 10) {
                $fourthNumberCode = "000" . $newCard->id;
            } elseif ($newCard->id < 100) {
                $fourthNumberCode = "00" . $newCard->id;
            } elseif ($newCard->id < 1000) {
                $fourthNumberCode = "0" . $newCard->id;
            } else {
                $fourthNumberCode = $newCard->id;
            }

            $newCardCode = $firstNumberCode . $secondNumberCode . $thirdNumberCode . $fourthNumberCode;

            DiscountCard::where("id", $newCard->id)->update([
                "code" => $newCardCode,
            ]);
        }
        $sale->save();


        return redirect("/checkout/success/" . $sale->id);
    }

    public function daftar_beli_tourism()
    {
        $users = User::orderBy('name', 'asc')->get();
        $payments = Payment::orderBy('name', 'asc')->get();

        $data = [
            'users' => $users,
            'payments' => $payments,
        ];
        return view('affiliate.beliTourismAccount', $data);
    }
}
