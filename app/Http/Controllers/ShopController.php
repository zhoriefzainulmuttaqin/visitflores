<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ShopController extends Controller
{
    public function shops()
    {
        if (Cookie::get('user-language') != NULL) {
            $locale = Cookie::get('user-language');
            App::setLocale($locale);
        } else {
            $locale = "id";
            App::setLocale("id");
        }
        $shops = Shop::paginate(12);

        $data = [
            'shops' => $shops,
        ];

        return view('user.shops', $data);
    }

    public function admin_oleholeh()
    {
        $shops = Shop::orderBy('name', 'asc')->get();

        $data = [
            'shops' => $shops,
        ];
        return view('admin.oleholeh', $data);
    }

    public function tambah_oleholeh()
    {
        return view('admin.tambah_oleholeh');
    }

    public function proses_tambah_oleholeh(Request $request)
    {
        $validatedData = $request->validate(
            [
                'slug' => 'unique:shops',
                'phone' => 'unique:shops',
                'image' => 'image',
            ],
            [
                'slug.unique' => 'Slug sudah ada !',
                'phone.unique' => 'No. Handphone sudah ada !',
                'image.image' => 'File harus berupa gambar',
            ]
        );

        // file
        $image = $request->file('image');
        $nameImage = Str::random(40) . '.' . $image->getClientOriginalExtension();
        $image->move('./assets/oleh-oleh/', $nameImage);

        // wajib
        $name = $request->name;
        $name_en = $request->name_en;
        $phone = $request->phone;
        $price = $request->price;
        $city = $request->city;
        $details = NULL;
        $details_en = NULL;
        $facilities = NULL;
        $facilities_en = NULL;
        $address = $request->address;
        $link_maps = $request->link_maps;

        // optional (Boleh kosong)
        $phone = $request->phone == "" ? NULL :  $request->phone;;
        $link_instagram = $request->link_instagram == "" ? NULL :  $request->link_instagram;
        $link_facebook = $request->link_facebook == "" ? NULL :  $request->link_facebook;
        $link_tiktok = $request->link_tiktok == "" ? NULL :  $request->link_tiktok;
        $link_youtube = $request->link_youtube == "" ? NULL :  $request->link_youtube;

        Shop::insert([
            'name' =>  $name,
            'name_en' =>  $name_en,
            'phone' =>  $phone,
            'price' =>  $price,
            'city' =>  $city,
            'details' =>  $details,
            'details_en' =>  $details_en,
            'facilities' =>  $facilities,
            'facilities_en' =>  $facilities_en,
            'address' =>  $address,
            'link_maps' =>  $link_maps,
            'link_instagram' =>  $link_instagram,
            'link_facebook' =>  $link_facebook,
            'link_tiktok' =>  $link_tiktok,
            'link_youtube' =>  $link_youtube,
            'slug' =>  Str::of($request->slug)->slug('-'),
            'picture' =>  $nameImage,
            'cover_picture' =>  $nameImage,
        ]);

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Oleh - Oleh Berhasil Ditambahkan</p>");
        return redirect()->to('/app-admin/data/oleholeh');
    }

    public function ubah_oleholeh(Request $request)
    {
        $slug = $request->slug;

        $shop = Shop::where('slug', $slug)->first();

        if ($shop) {
            $data = [
                'shop' => $shop,
            ];
            return view('admin.ubah_oleholeh', $data);
        } else {
            session()->flash('msg_status', 'warning');
            session()->flash('msg', "<h5>Gagal</h5><p>Data oleh - oleh tidak ditemukan !</p>");
            return redirect()->to('/app-admin/data/oleholeh');
        }
    }

    public function proses_ubah_oleholeh(Request $request)
    {
        // wajib
        $id = $request->id;
        $slug = $request->slug;
        $name = $request->name;
        $name_en = $request->name_en;
        $price = $request->price;
        $city = $request->city;
        $details = NULL;
        $details_en = NULL;
        $facilities = NULL;
        $facilities_en = NULL;
        $address = $request->address;
        $link_maps = $request->link_maps;

        // optional (Boleh kosong)
        $phone = $request->phone == "" ? NULL :  $request->phone;;
        $link_instagram = $request->link_instagram == "" ? NULL :  $request->link_instagram;
        $link_facebook = $request->link_facebook == "" ? NULL :  $request->link_facebook;
        $link_tiktok = $request->link_tiktok == "" ? NULL :  $request->link_tiktok;
        $link_youtube = $request->link_youtube == "" ? NULL :  $request->link_youtube;


        $data_shop = Shop::where('id', $id)->first();

        $rules = [];

        if ($request->slug != $data_shop->slug) {
            $rules['slug'] = 'required|unique:shops';
        } else {
            $rules['slug'] = 'required';
        }

        // if ($request->phone != $data_shop->phone) {
        //     $rules['phone'] = 'required|unique:shops';
        // } else {
        //     $rules['phone'] = 'required';
        // }

        $rules['image'] = 'image';

        $validateData = $request->validate($rules, [
            'phone.unique' => 'No. Handphone : ' . $phone . ' sudah terdaftar !',
            'slug.unique' => 'Slug : ' . $slug . ' sudah terdaftar !',
            'image.image' => 'File harus berupa gambar !',
        ]);

        if ($request->file('image')) {
            if ($data_shop->picture != NULL) {
                unlink(('./assets/oleh-oleh/') . $data_shop->picture);
            }
            $image = $request->file('image');
            $nameImage = Str::random(40) . '.' . $image->getClientOriginalExtension();
            $image->move('./assets/oleh-oleh/', $nameImage);
        } else {
            $nameImage = $request->picture_old;
        }

        Shop::where('id', $id)
            ->update([
                'name' =>  $name,
                'name_en' =>  $name_en,
                'phone' =>  $phone,
                'price' =>  $price,
                'city' =>  $city,
                'details' =>  $details,
                'details_en' =>  $details_en,
                'facilities' =>  $facilities,
                'facilities_en' =>  $facilities_en,
                'address' =>  $address,
                'link_maps' =>  $link_maps,
                'link_instagram' =>  $link_instagram,
                'link_facebook' =>  $link_facebook,
                'link_tiktok' =>  $link_tiktok,
                'link_youtube' =>  $link_youtube,
                'slug' =>  Str::of($slug)->slug('-'),
                'picture' =>  $nameImage,
                'cover_picture' =>  $nameImage,
            ]);

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Oleh - Oleh Berhasil Diubah</p>");
        return redirect()->to('app-admin/data/ubah/oleholeh/' . $slug);
    }

    public function proses_hapus_oleholeh(Request $request)
    {
        $slug = $request->slug;
        $shop = Shop::where('slug', $slug)->first();

        if ($shop) {
            unlink(('./assets/oleh-oleh/') . $shop->picture);
            Shop::where('slug', $slug)->delete();
            session()->flash('msg_status', 'success');
            session()->flash('msg', "<h5>Berhasil</h5><p>Data oleh-oleh berhasil dihapus !</p>");
            return redirect()->to('/app-admin/data/oleholeh');
        } else {
            session()->flash('msg_status', 'warning');
            session()->flash('msg', "<h5>Gagal</h5><p>Data oleh-oleh tidak ditemukan !</p>");
            return redirect()->to('/app-admin/data/oleholeh');
        }
    }
}
