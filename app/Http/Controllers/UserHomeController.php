<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\News;
use App\Models\Restaurant;
use App\Models\Tour;

class UserHomeController extends Controller
{
    //
    public function home()
    {
        $events = Event::orderBy("start_date", "asc")->orderBy("id", "asc")->get();
        $culiners = Restaurant::all();
        $news = News::join('categories', 'news.category_id', '=', 'categories.id')
            ->join('administrators', 'news.admin_id', '=', 'administrators.id')
            ->where('categories.type', 1)
            ->select(['news.*', 'categories.name as category_name', 'administrators.name as admin_name'])
            ->limit(3)
            ->orderBy('news.published_date', 'desc')
            ->get();
        $tours = Tour::all();
        $data = ([
            "events" => $events,
            "culiners" => $culiners,
            "news" => $news,
            "tours" => $tours,
        ]);

        return view("user.home", $data);
    }
}
