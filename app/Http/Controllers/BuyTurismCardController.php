<?php

namespace App\Http\Controllers;

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

        $transaction = Transaction::create([
            'user_id' => Auth::user()->id,
            'discountcardsales_id' => $data['discountcardsales_id'],
            'price' => $data['price'] * $data['quantity'],
            'quantity' => $data['quantity'],
            'status' => 'pending',
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

    public function checkout(Transaction $transaction)
    {

        $products = DiscountCardSale::findOrFail($transaction->discountcardsales_id)->get()->first();
        $product = collect($products)->firstWhere('id', $transaction->discountcardsales_id);
        return view('user.confirm_beli_tourism_card', compact('transaction', 'product', 'products'));
    }

    public function success(Transaction $transaction)
    {
        $transaction->status = 'success';
        $transaction->save();
        return view('user.success_order', compact('transaction'));
    }
}
