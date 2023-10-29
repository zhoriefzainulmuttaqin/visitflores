<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Restaurant;

class UserHomeController extends Controller
{
    //
    public function home(){
        $events = Event::orderBy("start_date","asc")->orderBy("id","asc")->get();
        $culiners = Restaurant::all();

        $data = ([
            "events" => $events,
            "culiners" => $culiners
        ]);

        return view("user.home",$data);
    }
}
