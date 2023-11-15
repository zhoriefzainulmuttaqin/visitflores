<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Payment;
use App\Models\Pattern;
use App\Models\DiscountCard;
use App\Models\DiscountCardSale;
use App\Models\Gift;
use App\Models\GiftSale;
use App\Models\GiftSaleItem;

use Image;
use Milon\Barcode\DNS1D;
use Milon\Barcode\DNS2D;
use Picqer\Barcode\BarcodeGeneratorPNG;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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
    public function tourism_card(){
        $transactions = DiscountCardSale::orderBy("date_carted","desc")->orderBy("id","desc")->get();
        $data = ([
            "transactions" => $transactions
        ]);
            
        return view("admin/transaksi_tourismcard",$data);
    }
    public function discount_card($id){
        $transaction = DiscountCardSale::where("id",$id)->first();

        if(!$transaction){
            session()->flash('msg', "<b>Gagal</b> <br> Data tidak ditemukan");
            session()->flash('msg_status', 'error');

            return redirect("app-admin/transaksi/tourism-card");
        }

        $data = ([
            "transaction" => $transaction
        ]);

        return view("admin/discount_card",$data);
    }
    public function generate_discount_card(Request $request){
        $sale_id = $request->sale_id;

        $sale = DiscountCardSale::where("id",$sale_id)->first();

        if(!$sale){
            session()->flash('msg', "<b>Gagal</b> <br> Data tidak ditemukan");
            session()->flash('msg_status', 'error');

            return redirect("app-admin/transaksi/tourism-card");
        }

        for($c = 1; $c <= $sale->quantity; $c++){
            $newCard = DiscountCard::create([
                "user_id"   => $sale->user_id,
                "sale_id" => $sale_id,
                "code"  => "(kosong)",
                "owner_name" => $sale->user->name,
                "owner_phone" => $sale->user->phone,
                "owner_email" => $sale->user->email,
                "date_created"  => date("Y-m-d"),
                "time_created" => date("H:i"),
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

        session()->flash('msg', "<b>Berhasil</b> <br> Discount Card Berhasil Dibuat");
        session()->flash('msg_status', 'success');
        
        return redirect("app-admin/transaksi/tourism-card/".$sale_id.'/discount-card');
    }
    public function discount_card_generate_image($id){
        $card = DiscountCard::where("id",$id)->first();

        $barcodeGenerator = new \Picqer\Barcode\BarcodeGeneratorPNG();
        $barcodeImage = $barcodeGenerator->getBarcode($card->code, $barcodeGenerator::TYPE_CODE_128, 4, 50);

        // Storage::put('barcodes/barcode.png', $image);

        // Buat latar belakang
        $background = Image::make('./assets/bg-discount-card-1.png');

        // Dapatkan dimensi gambar latar belakang
        $width = $background->width();
        $height = $background->height();

        // Tambahkan nama pemilik kartu
        $background->text($card->owner_name, $width / 2, ($height / 2) + 55, function ($font) {
            $font->file('./assets/Poppins-ExtraBold.ttf');
            $font->size(45);
            $font->color('#000000');
            $font->align('center');
            $font->valign('middle');
        });

        // Tambahkan kode kartu
        $cardCode = str_split($card->code,4);
        $textCode = "";
        for($codeno = 0; $codeno <= (count($cardCode) - 1); $codeno++){
            if($codeno == 0){
                $textCode .= $cardCode[$codeno];
            }else{
                $textCode .= " ".$cardCode[$codeno];
            }
        }       
        $background->text($textCode, $width / 2, ($height / 2) + 95, function ($font) {
            $font->file('./assets/Poppins-Medium.ttf');
            $font->size(20);
            $font->color('#000000');
            $font->align('center');
            $font->valign('middle');
        });        

        $background->insert($barcodeImage,'bottom-center',0, 125);

        // Simpan gambar
        $background->save('./assets/discount-card/discount_card_'.$card->code.'.jpg');

        return response()->download('./assets/discount-card/discount_card_'.$card->code.'.jpg');
    }
}
