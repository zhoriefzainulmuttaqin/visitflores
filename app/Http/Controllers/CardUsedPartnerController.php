<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\DiscountCard;
use App\Models\DiscountCardSale;
use App\Models\DiscountCardUsed;

class CardUsedPartnerController extends Controller
{
    //
    public function penggunaan_kartu(Request $request){
        if($request->card_number){
            $card_number = $request->card_number;

            $card = DiscountCard::where("code",$card_number)->first();

            if($card){
                $card = $card;
            }else{
                $card = NULL;
            }
        }else{
            $card_number = NULL;
            $card = NULL;
        }

        $uses = DiscountCardUsed::where("partner_id",Auth::guard('partner')->user()->id)
                ->orderBy("date_used","desc")->orderBy("id","desc")->get();

        $data = ([
            "card_number" => $card_number,
            "card" => $card,
            "uses" => $uses,
        ]);

        return view("partner/penggunaan_kartu",$data);
    }
    public function gunakan_kartu(Request $request){
        $card_id = $request->card_id;

        $card = DiscountCard::where("id",$card_id)->first();

        if(!$card){
            session()->flash('msg', "<b>Gagal</b> <br> Data tidak ditemukan");
            session()->flash('msg_status', 'error');

            return redirect("app-mitra/penggunaan-kartu");
        }

        $date_now = date("Y-m-d");
        $time_now = date("H:i");

        if($card->date_expired == NULL){
            $use_action = "can_use";
        }else{
            if(date("Y-m-d",strtotime($card->date_expired)) > $date_now){
                $use_action = "can_use";
            }elseif(date("Y-m-d",strtotime($card->date_expired)) == $date_now){
                if(date("H:i",strtotime($card->time_expired)) >= $time_now){
                    $use_action = "can_use";
                }else{
                    $use_action = "has_expired";
                }
            }else{
                $use_action = "has_expired";
            }
        }

        if($use_action == "has_expired"){
            session()->flash('msg', "<b>Gagal</b> <br> Kartu sudah kadaluarsa");
            session()->flash('msg_status', 'error');

            return redirect("app-mitra/penggunaan-kartu");
        }else{
            $date_used = date("Y-m-d");
            $time_used = date("H:i");
            $date_expired = date("Y-m-d",strtotime("+3 days"));
    
            if($card->date_activated == NULL){
    
                DiscountCard::where("id",$card_id)->update([
                    "date_activated" => $date_used,
                    "time_activated" => $time_used,
                    "date_expired" => $date_expired,
                    "time_expired" => $time_used,
                ]);
            }
    
            if(Auth::guard('partner')->user()->type == 1){
                $partner_type = "tour";
            }elseif(Auth::guard('partner')->user()->type == 2){
                $partner_type = "shop";
            }elseif(Auth::guard('partner')->user()->type == 3){
                $partner_type = "restaurant";
            }elseif(Auth::guard('partner')->user()->type == 4){
                $partner_type = "accomodation";
            }
    
            DiscountCardUsed::create([
                "partner_id"    => Auth::guard('partner')->user()->id,
                "partner_type"  => $partner_type,
                "company_id"    => Auth::guard('partner')->user()->child_id,
                "user_id"       => $card->user_id,
                "card_id"       => $card->id,
                "date_used"     => $date_used,
                "time_used"     => $time_used
            ]);
    
            session()->flash('msg', "<b>Berhasil</b> <br> Kartu berhasil digunakan");
            session()->flash('msg_status', 'success');
            
            // return redirect("app-mitra/penggunaan-kartu?card_number=".$card->code);
            return redirect("app-mitra/penggunaan-kartu");
        }

    }
}
