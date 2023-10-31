<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;


class EventController extends Controller
{
    public function event(Request $request)
    {
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
            ->where('events.name', 'like',  '%' . $keyword . '%')
            ->when($order, function (Builder $query, $order) {
                if ($order) {
                    $query->orderBy("events.$order[0]", "$order[1]");
                } else {
                    $query->orderBy('events.name', 'asc');
                }
            })
            ->select(['events.*', 'administrators.name as admin_name'])
            ->get();

        $data = [
            'events' => $events,
            'keyword' => $keyword,
            'order' => implode(",", $order),
        ];
        return view('user.event', $data);
    }
}
