<?php

namespace App\Http\Controllers;

use App\Models\Accomodation;
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
            ->get();
        $data = [
            'accomodations' => $accomodations,
            'star_list' => $star_list_data,
        ];
        return view('user.akomodasi', $data);
    }

    public function detail_akomodasi(Request $request)
    {
        $accomodation = Accomodation::where('accomodations.slug', $request->slug)
            ->select(['accomodations.*'])
            ->orderBy('accomodations.name', 'asc')
            ->first();
        $data = [
            'accomodation' => $accomodation,
        ];
        return view('user.detail_akomodasi', $data);
    }
}
