<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ticket;
use App\Models\Tour;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class TourController extends Controller
{
    public function tours(Request $request)
    {
        if (Cookie::get('user-language') != NULL) {
            $locale = Cookie::get('user-language');
            App::setLocale($locale);
        } else {
            $locale = "id";
            App::setLocale("id");
        }
        if ($request->keyword) {
            $keyword = $request->keyword;
        } else {
            $keyword = '';
        }

        $cat_list = [];
        $cat_list_data = [];

        if ($request->cat_list) {
            $cat_list = $request->cat_list;
            $cat_list_data = array_fill_keys($request->cat_list, 'category');
        };

        $tours = Tour::join('categories', 'tours.category_id', '=', 'categories.id')
            ->where('categories.type', 2)
            ->when($locale, function (Builder $query, $locale) use ($keyword) {
                if ($locale == 'en') {
                    $query->where('tours.name_en', 'like',  '%' . $keyword . '%');
                } else {
                    $query->where('tours.name', 'like',  '%' . $keyword . '%');
                }
            })
            // ->where('tours.name', 'like',  '%' . $keyword . '%')
            // ->Orwhere('tours.name_en', 'like',  '%' . $keyword . '%')
            // ->where(function (Builder $query) use ($cat_list, $request) {
            //     if ($request->cat_list) {
            //         if ($request->cat_list[0] != "0") {
            //             $query->where(
            //                 function (Builder $q) use ($cat_list) {
            //                     foreach ($cat_list as $key => $value) {
            //                         $q->orWhere('tours.category_id', $value);
            //                     }
            //                 }
            //             );
            //         }
            //     }
            // })
            ->where(function (Builder $query) use ($cat_list) {
                $query->where(
                    function (Builder $q) use ($cat_list) {
                        foreach ($cat_list as $key => $value) {
                            $q->orWhere('tours.category_id', $value);
                        }
                    }
                );
            })
            ->select(['tours.*', 'categories.name as category_name', 'categories.name_en as category_name_en'])
            ->orderBy('tours.id', 'asc')
            ->paginate(10);
        if ($request->keyword) {
            $tours->appends(array('keyword' => $keyword));
        }
        if ($request->cat_list) {
            $tours->appends($cat_list);
        }

        $categories = Category::where('type', 2)->orderBy('name', 'asc')->get();
        $data = [
            'tours' => $tours,
            'categories' => $categories,
            "cat_list"   => $cat_list_data,
        ];
        return view('user.tours', $data);
    }

    public function detail_tour(Request $request)
    {
        if (Cookie::get('user-language') != NULL) {
            $locale = Cookie::get('user-language');
            App::setLocale($locale);
        } else {
            $locale = "id";
            App::setLocale("id");
        }
        $tour = Tour::join('categories', 'tours.category_id', '=', 'categories.id')
            ->where('categories.type', 2)
            ->select(['tours.*', 'categories.name as category_name', 'categories.name_en as category_name_en'])
            ->where('tours.slug', $request->slug)->first();

        if ($tour) {
            $data = [
                'tour' => $tour,
            ];

            return view('user.tour_details', $data);
        } else {
            return redirect("wisata");
        }
    }
}
