<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
class IklanController extends Controller
{
    public function iklan()
     {
        $iklan = Ads::orderBy('active_status', 'desc')->get();

        $data = [
            'iklan' => $iklan,
        ];
        return view('admin.iklan', $data);
    }
    public function iklanAtas()
     {
        $iklan = Ads::where('status', 1)->orderBy('active_status', 'desc')->get();

        $data = [
            'iklan' => $iklan,
        ];
        return view('admin.iklan_atas', $data);
    }
    public function iklanBawah()
     {
        $iklan = Ads::where('status', 2)->orderBy('active_status', 'desc')->get();

        $data = [
            'iklan' => $iklan,
        ];
        return view('admin.iklan_bawah', $data);
    }
    public function iklanPopup()
     {
        $iklan = Ads::where('status', 3)->orderBy('active_status', 'desc')->get();

        $data = [
            'iklan' => $iklan,
        ];
        return view('admin.iklan_popup', $data);
    }

    public function tambah_iklan()
    {

        $iklan = Ads::get();

        $data = [
            'iklan' => $iklan,
        ];
        return view('admin.tambah_iklan', $data);
    }
    public function ubah_iklan(Request $request)
    {
        $slug = $request->slug;

        $iklan = Ads::where('slug', $slug)->first();

        if ($iklan) {
            $data = [
                'iklan' => $iklan,
            ];
            return view('admin.ubah_iklan', $data);
        } else {
            session()->flash('msg_status', 'warning');
            session()->flash('msg', "<h5>Gagal</h5><p>Data oleh - oleh tidak ditemukan !</p>");
            return redirect()->to('/app-admin/data/iklan');
        }
    }

    public function proses_tambah_iklan(Request $request)
    {
        $validatedData = $request->validate(
            [
                'slug' => 'unique:shops',
                'picture' => 'image',
            ],
            [
                'slug.unique' => 'Slug sudah ada !',
                'picture.image' => 'File harus berupa gambar',
            ]
        );

        // file
        $picture = $request->file('picture');
        $namePicture = Str::random(40) . '.' . $picture->getClientOriginalExtension();
        $picture->move('./assets/iklan/', $namePicture);


        Ads::insert([

            'slug' =>  $request->slug,
            'picture' =>  $namePicture,
            'active_status' =>  $request->active_status ?? 0,
            'status' =>  $request->status ?? 0,
        ]);

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Iklan Berhasil Ditambahkan</p>");
        return redirect()->to('/app-admin/data/iklan');
    }


    public function proses_ubah_iklan(Request $request)
    {
      // wajib
      $id = $request->id;
      $slug = $request->slug;
      $status = $request->status;
      $active_status = $request->active_status;

      $data_iklan = Ads::where('id', $id)->first();

      $rules = [];

      if ($request->slug != $data_iklan->slug) {
          $rules['slug'] = 'required|unique:ads';
      } else {
          $rules['slug'] = 'required';
      }

      // if ($request->phone != $data_iklan->phone) {
      //     $rules['phone'] = 'required|unique:restaurants';
      // } else {
      //     $rules['phone'] = 'required';
      // }

      $rules['image'] = 'image';

      $validateData = $request->validate(
        [
            'slug' => $rules['slug'],
            'image' => $rules['image'],
        ],
        [
            'slug.required' => 'Slug harus diisi.',
            'slug.unique' => 'Slug sudah terdaftar.',
            'image.image' => 'File harus berupa gambar.',
        ]
    );

      if ($request->file('image')) {
          if ($data_iklan->picture != NULL) {
              unlink(('./assets/iklan/') . $data_iklan->picture);
          }
          $image = $request->file('image');
          $nameImage = Str::random(40) . '.' . $image->getClientOriginalExtension();
          $image->move('./assets/iklan/', $nameImage);
      } else {
          $nameImage = $request->picture_old;
      }

      Ads::where('id', $id)
          ->update([

              'slug' =>  $slug,
              'picture' =>  $nameImage,
              'status' =>  $status,
              'active_status' =>  $active_status,

          ]);

      session()->flash('msg_status', 'success');
      session()->flash('msg', "<h5>Berhasil</h5><p>Kuliner Berhasil Diubah</p>");
      return redirect()->to('app-admin/data/iklan');
    }

    public function proses_hapus_iklan(Request $request)
    {
        $slug = $request->slug;
        $iklan = Ads::where('slug', $slug)->first();

        if ($iklan) {
            unlink(('./assets/iklan/') . $iklan->picture);
            Ads::where('slug', $slug)->delete();
            session()->flash('msg_status', 'success');
            session()->flash('msg', "<h5>Berhasil</h5><p>Data iklan berhasil dihapus !</p>");
            return redirect()->to('/app-admin/data/iklan');
        } else {
            session()->flash('msg_status', 'warning');
            session()->flash('msg', "<h5>Gagal</h5><p>Data iklan tidak ditemukan !</p>");
            return redirect()->to('/app-admin/data/iklan');
        }
    }
}
