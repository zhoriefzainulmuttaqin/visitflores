<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;


class EventController extends Controller
{
    public function event(Request $request)
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

    public function admin_event(Request $request)
    {
        $events = Event::join('administrators', 'events.admin_id', '=', 'administrators.id')
            ->orderBy('events.published_date', 'desc')
            ->where('events.admin_id', Auth::guard('admin')->user()->id)
            ->select(['events.*', 'administrators.name as admin_name'])
            ->get();
        $data = [
            'events' => $events,
        ];
        return view('admin.event', $data);
    }

    public function tambah_event(Request $request)
    {
        return view('admin.tambah_event');
    }
    public function buat_slug(Request $request)
    {
        $slug = Str::of($request->name)->slug('-');
        return response()->json(['slug' => $slug]);
    }
    public function proses_tambah_event(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|max:255',
                'name_en' => 'required|max:255',
                'slug' => 'required|unique:events',
                'location' => 'required',
                'start_date' => 'required',
                'start_time' => 'required',
                'cover_picture' => 'required|image',
                'end_date' => 'required',
                'end_time' => 'required',
            ],
            [
                'name.max' => 'Nama maksimal 255 karakter',
                'name_en.max' => 'Nama maksimal 255 karakter',
                'slug.unique' => 'Slug sudah ada',
                'cover_picture.image' => 'File harus berupa gambar',
            ]
        );


        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['admin_id'] = Auth::guard('admin')->user()->id;
        $validatedData['published_date'] = date('Y-m-d');
        $validatedData['published_time'] = date('G:i');
        $validatedData['slug'] = Str::of($request->slug)->slug('-');

        $image = $request->file('image');
        $nameImage = Str::random(40) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path() . '/assets/event/', $nameImage);
        $validatedData['cover_picture'] = $nameImage;
        Event::create($validatedData);
        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Event Berhasil Ditambahkan</p>");
        return redirect()->to('/app-admin/data/event');
    }
    public function edit_event(Event $Event)
    {
        $data = [
            'event' => $Event,
        ];
        return view('admin.edit_event', $data);
    }

    public function proses_edit_event(Request $request)
    {
        $checkCourse = Event::where('slug', $request->input('slug'))->where('id', '!=', $request->input('event_id'))->first();

        if ($checkCourse) {
            $rules = [
                'name' => 'required|max:255',
                'name_en' => 'required|max:255',
                'slug' => 'required|unique:events',
                'location' => 'required',
                'start_date' => 'required',
                'start_time' => 'required',
                'cover_picture' => 'image',
                'end_date' => 'required',
                'end_time' => 'required',
            ];
        } else {
            $rules = [
                'name' => 'required|max:255',
                'name_en' => 'required|max:255',
                'slug' => 'required',
                'location' => 'required',
                'start_date' => 'required',
                'start_time' => 'required',
                'cover_picture' => 'image',
                'end_date' => 'required',
                'end_time' => 'required',
            ];
        }

        $validatedData = $request->validate(
            $rules,
            [
                'name.max' => 'Nama maksimal 255 karakter',
                'name_en.max' => 'Nama maksimal 255 karakter',
                'slug.unique' => 'Slug sudah ada',
                'cover_picture.image' => 'File harus berupa gambar',
            ]
        );


        $validatedData['admin_id'] = Auth::guard('admin')->user()->id;
        $validatedData['slug'] = Str::of($request->slug)->slug('-');

        if ($request->file('image')) {
            $event = Event::where('id', $request->input('event_id'))->first();
            if ($event->cover_picture != NULL) {
                unlink(public_path('assets/event/') . $event->cover_picture);
            }
            $image = $request->file('image');
            $nameImage = Str::random(40) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path() . '/assets/event/', $nameImage);
            $validatedData['cover_picture'] = $nameImage;
        }
        Event::where('id', $request->input('event_id'))->update($validatedData);
        $event = Event::where('id', $request->input('event_id'))->first();

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Event Berhasil Diubah</p>");
        return redirect()->to("/app-admin/data/edit/event/$event->id");
    }
    public function hapus_event(Event $Event)
    {
        unlink(public_path('assets/event/') . $Event->cover_picture);
        Event::where('id', $Event->id)->delete();
        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Event Berhasil Dihapus</p>");
        return redirect()->to("/app-admin/data/event");
    }
}
