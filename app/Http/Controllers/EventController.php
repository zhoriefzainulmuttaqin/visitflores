<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;


class EventController extends Controller
{
    public function event(Request $request)
    {
        $locale = Cookie::get('user-language');
        App::setLocale($locale);
        if ($request->keyword) {
            $keyword = $request->keyword;
        } else {
            $keyword = '';
        }

        $order = [];
        if ($request->order) {
            $order = explode(",", $request->order);
        }
        $events = Event::join('administrators', 'events.admin_id', '=', 'administrators.id')
            ->when($order, function (Builder $query, $order) {
                if ($order) {
                    $query->orderBy("events.$order[0]", "$order[1]");
                } else {
                    $query->orderBy('events.name', 'asc');
                }
            })
            ->when($locale, function (Builder $query, $locale) use ($keyword) {
                if ($locale == 'en') {
                    $query->where('events.name_en', 'like',  '%' . $keyword . '%');
                } else {
                    $query->where('events.name', 'like',  '%' . $keyword . '%');
                }
            })
            ->select(['events.*', 'administrators.name as admin_name'])
            ->paginate(10);
        if ($request->keyword) {
            $events->appends(array('keyword' => $keyword));
        }
        if ($request->star_list) {
            $events->appends($order);
        }
        $data = [
            'events' => $events,
            'keyword' => $keyword,
            'order' => implode(",", $order),
        ];
        return view('user.event', $data);
    }
}
