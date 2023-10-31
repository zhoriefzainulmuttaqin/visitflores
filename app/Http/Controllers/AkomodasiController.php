<?php

namespace App\Http\Controllers;

use App\Models\Accomodation;
use App\Models\AccomodationGallery;
use App\Models\AccomodationLink;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class AkomodasiController extends Controller
{
    public function akomodasi(Request $request)
    {
        if ($request->keyword) {
            $keyword = $request->keyword;
        } else {
            $keyword = '';
        }

        $star_list = [];
        $star_list_data = [];

        if ($request->star_list) {
            $star_list = $request->star_list;
            $star_list_data = array_fill_keys($request->star_list, 'star');
        };

        $accomodations = Accomodation::where('accomodations.name', 'like',  '%' . $keyword . '%')
            ->where(function (Builder $query) use ($star_list) {
                // $query->whereIn('level', $star_list);
                $query->where(
                    function (Builder $q) use ($star_list) {
                        foreach ($star_list as $key => $value) {
                            $q->orWhere('star', $value);
                        }
                    }
                );
            })
            ->select(['accomodations.*'])
            ->orderBy('accomodations.name', 'asc')
            ->paginate(1);
        if ($request->keyword) {
            $accomodations->appends(array('keyword' => $keyword));
        }
        if ($request->star_list) {
            $accomodations->appends($star_list);
        }
        $data = [
            'accomodations' => $accomodations,
            'star_list' => $star_list_data,
        ];
        return view('user.akomodasi', $data);
    }

    public function detail_akomodasi(Request $request, Accomodation $Accomodation)
    {
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
