<?php

namespace App\Http\Controllers;

use App\Models\Accomodation;
use App\Models\AccomodationGallery;
use App\Models\AccomodationLink;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class AkomodasiController extends Controller
{
    public function akomodasi(Request $request)
    {
        $locale = Cookie::get('user-language');
        App::setLocale($locale);
        if ($request->keyword) {
            $keyword = $request->keyword;
        } else {
            $keyword = '';
        }
        if ($request->order_price) {
            $order_price = $request->order_price;
        } else {
            $order_price = '';
        }

        $star_list = [];
        $star_list_data = [];

        if ($request->star_list) {
            $star_list = $request->star_list;
            $star_list_data = array_fill_keys($request->star_list, 'star');
        };

        $accomodations = Accomodation::when($locale, function (Builder $query, $locale) use ($keyword) {
            if ($locale == 'en') {
                $query->where('accomodations.name_en', 'like',  '%' . $keyword . '%');
            } else {
                $query->where('accomodations.name', 'like',  '%' . $keyword . '%');
            }
        })->where(function (Builder $query) use ($star_list) {
            // $query->whereIn('level', $star_list);
            $query->where(
                function (Builder $q) use ($star_list) {
                    foreach ($star_list as $key => $value) {
                        $q->orWhere('star', $value);
                    }
                }
            );
        })
            ->when($order_price, function (Builder $query, $order_price) {
                $query->orderBy("accomodations.price_start_from", $order_price);
            })
            ->orderBy('accomodations.name', 'asc')
            ->select(['accomodations.*'])
            ->paginate(10);
        if ($request->keyword) {
            $accomodations->appends(array('keyword' => $keyword));
        }
        if ($request->star_list) {
            $accomodations->appends($star_list);
        }
        if ($request->order_price) {
            $accomodations->appends(['order_price' => $request->order_price]);
        }

        $data = [
            'accomodations' => $accomodations,
            'star_list' => $star_list_data,
            'order_price' => $order_price,
        ];
        return view('user.akomodasi', $data);
    }

    public function detail_akomodasi(Request $request, Accomodation $Accomodation)
    {
        $locale = Cookie::get('user-language');
        App::setLocale($locale);
        $accomodation = Accomodation::where('accomodations.slug', $Accomodation->slug)
            ->select(['accomodations.*',])
            ->orderBy('accomodations.name', 'asc')
            ->first();
        $AccomodationGalleries = AccomodationGallery::join('accomodations', 'accomodation_galleries.data_id', '=', 'accomodations.id')
            ->where('accomodation_galleries.data_id', $Accomodation->id)
            ->select(['accomodation_galleries.*'])
            ->get();
        $AccomodationLinks = AccomodationLink::join('accomodations', 'accomodation_links.data_id', '=', 'accomodations.id')
            ->where('accomodation_links.data_id', $Accomodation->id)
            ->select(['accomodation_links.*'])
            ->get();
        $accomodation->accomodation_galleries = $AccomodationGalleries;
        $accomodation->accomodation_links = $AccomodationLinks;
        $data = [
            'accomodation' => $accomodation,
        ];
        return view('user.detail_akomodasi', $data);
    }
}
