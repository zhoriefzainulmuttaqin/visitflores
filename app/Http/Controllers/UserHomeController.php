<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use App\Models\Event;
use App\Models\News;
use App\Models\Restaurant;
use App\Models\Tour;
use App\Models\Accomodation;

use Illuminate\Support\Facades\Cookie;

class UserHomeController extends Controller
{
    //
    public function home()
    {
        $locale = Cookie::get('user-language');
        App::setLocale($locale);

        $events = Event::orderBy("start_date", "asc")->orderBy("id", "asc")->get();
        $culiners = Restaurant::limit(3)->get();
        $news = News::join('categories', 'news.category_id', '=', 'categories.id')
            ->join('administrators', 'news.admin_id', '=', 'administrators.id')
            ->where('categories.type', 1)
            ->select(['news.*', 'categories.name as category_name', 'administrators.name as admin_name'])
            ->limit(3)
            ->orderBy('news.published_date', 'desc')
            ->get();
        $tours = Tour::limit(10)->get();
        $accomodations = Accomodation::limit(10)->get();

        $data = ([
            "events" => $events,
            "culiners" => $culiners,
            "news" => $news,
            "tours" => $tours,
            "accomodations" => $accomodations,
        ]);

        return view("user.home", $data);
    }
}
