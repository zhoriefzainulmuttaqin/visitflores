<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ticket;
use App\Models\Tour;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;

class TourController extends Controller
{
    public function tours(Request $request)
    {
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
            ->where('categories.type', 3)
            ->where('tours.name', 'like',  '%' . $keyword . '%')
            ->where(function (Builder $query) use ($cat_list, $request) {
                if ($request->cat_list[0] != "0") {
                    $query->where(
                        function (Builder $q) use ($cat_list) {
                            foreach ($cat_list as $key => $value) {
                                $q->orWhere('tours.category_id', $value);
                            }
                        }
                    );
                }
            })
            ->select(['tours.*', 'categories.name as category_name'])
            ->orderBy('tours.id', 'asc')
            ->get();

        $categories = Category::where('type', 3)->orderBy('name', 'asc')->get();
        $data = [
            'tours' => $tours,
            'categories' => $categories,
            "cat_list"   => $cat_list_data,
        ];
        return view('user.tours', $data);
    }
}
