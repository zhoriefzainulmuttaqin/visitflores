<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gift;
use App\Models\GiftSaleItem;
use Illuminate\Support\Str;

class GiftController extends Controller
{
    public function admin_paket_oleh_oleh()
    {
        $gifts = Gift::orderBy('name', 'asc')->get();

        $data = [
            'gifts' => $gifts,
        ];
        return view('admin.paket_oleh_oleh', $data);
    }

    public function tambah_paket_oleh_oleh()
    {
        return view('admin.tambah_paket_oleh_oleh');
    }

    public function proses_tambah_paket_oleh_oleh(Request $request)
    {
        $validatedData = $request->validate(
            [
                'slug' => 'unique:gifts',
                'image' => 'image',
            ],
            [
                'slug.unique' => 'Slug sudah ada !',
                'image.image' => 'File harus berupa gambar',
            ]
        );

        // file
        $image = $request->file('image');
        $nameImage = Str::random(40) . '.' . $image->getClientOriginalExtension();
        $image->move('./assets/layanan-produk/', $nameImage);

        // wajib
        $name = $request->name;
        $name_en = $request->name_en;
        $price = $request->price;
        $weight = $request->weight;
        $unit = $request->unit;
        $contents_count = $request->contents_count;
        $contents = $request->contents;
        $contents_en = $request->contents_en;

        Gift::insert([
            'name' =>  $name,
            'name_en' =>  $name_en,
            'price' =>  $price,
            'weight' =>  $weight,
            'unit' =>  $unit,
            'contents_count' =>  $contents_count,
            'contents' =>  $contents,
            'contents_en' =>  $contents_en,
            'slug' =>  Str::of($request->slug)->slug('-'),
            'picture' =>  $nameImage,
        ]);

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Paket Oleh - Oleh  Berhasil Ditambahkan</p>");
        return redirect()->to('/app-admin/data/paket-oleh-oleh');
    }

    public function ubah_paket_oleh_oleh(Request $request)
    {
        $slug = $request->slug;

        $gift = Gift::where('slug', $slug)->first();

        if ($gift) {

            $data = [
                'gift' => $gift,
            ];
            return view('admin.ubah_paket_oleh_oleh', $data);
        } else {
            session()->flash('msg_status', 'warning');
            session()->flash('msg', "<h5>Gagal</h5><p>Data paket oleh - oleh tidak ditemukan !</p>");
            return redirect()->to('/app-admin/data/paket-oleh-oleh');
        }
    }

    public function proses_ubah_paket_oleh_oleh(Request $request)
    {
        // wajib
        $id = $request->id;
        $slug = $request->slug;
        $name = $request->name;
        $name_en = $request->name_en;
        $price = $request->price;
        $weight = $request->weight;
        $unit = $request->unit;
        $contents_count = $request->contents_count;
        $contents = $request->contents;
        $contents_en = $request->contents_en;


        $data_gift = Gift::where('id', $id)->first();

        $rules = [];

        if ($request->slug != $data_gift->slug) {
            $rules['slug'] = 'required|unique:gifts';
        } else {
            $rules['slug'] = 'required';
        }

        $rules['image'] = 'image';

        $validateData = $request->validate($rules, [
            'slug.unique' => 'Slug : ' . $slug . ' sudah terdaftar !',
            'image.image' => 'File harus berupa gambar !',
        ]);

        if ($request->file('image')) {
            if ($data_gift->picture != NULL) {
                unlink(('./assets/layanan-produk/') . $data_gift->picture);
            }
            $image = $request->file('image');
            $nameImage = Str::random(40) . '.' . $image->getClientOriginalExtension();
            $image->move('./assets/layanan-produk/', $nameImage);
        } else {
            $nameImage = $request->picture_old;
        }

        Gift::where('id', $id)
            ->update([
                'name' =>  $name,
                'name_en' =>  $name_en,
                'price' =>  $price,
                'weight' =>  $weight,
                'unit' =>  $unit,
                'contents_count' =>  $contents_count,
                'contents' =>  $contents,
                'contents_en' =>  $contents_en,
                'slug' =>  Str::of($slug)->slug('-'),
                'picture' =>  $nameImage,
            ]);

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Paket Oleh - Oleh  Berhasil Diubah</p>");
        return redirect()->to('app-admin/data/ubah/paket-oleh-oleh/' . $slug);
    }

    public function proses_hapus_paket_oleh_oleh(Request $request)
    {
        $slug = $request->slug;
        $gift = Gift::where('slug', $slug)->first();

        if ($gift) {
            $gift_sale_items = GiftSaleItem::where('gift_id', $gift->id)->first();
            if ($gift_sale_items) {
                session()->flash('msg_status', 'warning');
                session()->flash('msg', "<h5>Gagal</h5><p>Data paket oleh - oleh sudah digunakan !</p>");
                return redirect()->to('/app-admin/data/paket-oleh-oleh');
            } else {
                unlink(('./assets/layanan-produk/') . $gift->picture);
                Gift::where('slug', $slug)->delete();
                session()->flash('msg_status', 'success');
                session()->flash('msg', "<h5>Berhasil</h5><p>Data paket oleh - oleh berhasil dihapus !</p>");
                return redirect()->to('/app-admin/data/paket-oleh-oleh');
            }
        } else {
            session()->flash('msg_status', 'warning');
            session()->flash('msg', "<h5>Gagal</h5><p>Data paket oleh - oleh tidak ditemukan !</p>");
            return redirect()->to('/app-admin/data/paket-oleh-oleh');
        }
    }
}
