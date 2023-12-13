<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ticket;
use App\Models\Tour;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class TourController extends Controller
{
    public function tours(Request $request)
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

        $cat_list = [];
        $cat_list_data = [];

        if ($request->cat_list) {
            $cat_list = $request->cat_list;
            $cat_list_data = array_fill_keys($request->cat_list, 'category');
        };

        $tours = Tour::join('categories', 'tours.category_id', '=', 'categories.id')
            ->where('categories.type', 2)
            ->when($locale, function (Builder $query, $locale) use ($keyword) {
                if ($locale == 'en') {
                    $query->where('tours.name_en', 'like',  '%' . $keyword . '%');
                } else {
                    $query->where('tours.name', 'like',  '%' . $keyword . '%');
                }
            })
            // ->where('tours.name', 'like',  '%' . $keyword . '%')
            // ->Orwhere('tours.name_en', 'like',  '%' . $keyword . '%')
            // ->where(function (Builder $query) use ($cat_list, $request) {
            //     if ($request->cat_list) {
            //         if ($request->cat_list[0] != "0") {
            //             $query->where(
            //                 function (Builder $q) use ($cat_list) {
            //                     foreach ($cat_list as $key => $value) {
            //                         $q->orWhere('tours.category_id', $value);
            //                     }
            //                 }
            //             );
            //         }
            //     }
            // })
            ->where(function (Builder $query) use ($cat_list) {
                $query->where(
                    function (Builder $q) use ($cat_list) {
                        foreach ($cat_list as $key => $value) {
                            $q->orWhere('tours.category_id', $value);
                        }
                    }
                );
            })
            ->select(['tours.*', 'categories.name as category_name', 'categories.name_en as category_name_en'])
            ->orderBy('tours.id', 'asc')
            ->paginate(12);
        if ($request->keyword) {
            $tours->appends(array('keyword' => $keyword));
        }
        if ($request->cat_list) {
            $tours->appends($cat_list);
        }

        $categories = Category::where('type', 2)->orderBy('name', 'asc')->get();
        $data = [
            'tours' => $tours,
            'categories' => $categories,
            "cat_list"   => $cat_list_data,
        ];
        return view('user.tours', $data);
    }

    public function detail_tour(Request $request)
    {
        if (Cookie::get('user-language') != NULL) {
            $locale = Cookie::get('user-language');
            App::setLocale($locale);
        } else {
            $locale = "id";
            App::setLocale("id");
        }
        $tour = Tour::join('categories', 'tours.category_id', '=', 'categories.id')
            ->where('categories.type', 2)
            ->select(['tours.*', 'categories.name as category_name', 'categories.name_en as category_name_en'])
            ->where('tours.slug', $request->slug)->first();

        if ($tour) {
            $data = [
                'tour' => $tour,
            ];

            return view('user.tour_details', $data);
        } else {
            return redirect("wisata");
        }
    }

    public function admin_wisata()
    {
        $tours = Tour::join('categories', 'tours.category_id', '=', 'categories.id')
            ->where('categories.type', 2)
            ->orderBy('tours.name', 'asc')
            ->select(['tours.*', 'categories.name as category_name'])
            ->get();

        $categories = Category::where('type', 2)->orderBy('name', 'asc')->get();

        $data = [
            'tours' => $tours,
            'categories' => $categories,
        ];
        return view('admin.wisata', $data);
    }

    public function tambah_wisata()
    {
        $categories = Category::where('type', 2)->orderBy('name', 'asc')->get();

        $data = [
            'categories' => $categories,
        ];
        return view('admin.tambah_wisata', $data);
    }

    public function proses_tambah_wisata(Request $request)
    {
        $validatedData = $request->validate(
            [
                'slug' => 'unique:tours',
                'phone' => 'unique:tours',
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
        $image->move('./assets/wisata/', $nameImage);

        // wajib
        $name = $request->name;
        $name_en = $request->name_en;
        $phone = $request->phone;
        $price = $request->price;
        $city = $request->city;
        $category_id = $request->category_id;
        $facilities = $request->facilities;
        $facilities_en = $request->facilities_en;
        $description = $request->description;
        $description_en = $request->description_en;
        $address = $request->address;
        $link_maps = $request->link_maps;

        // optional (Boleh kosong)
        $link_instagram = $request->link_instagram == "" ? NULL :  $request->link_instagram;
        $link_facebook = $request->link_facebook == "" ? NULL :  $request->link_facebook;
        $link_tiktok = $request->link_tiktok == "" ? NULL :  $request->link_tiktok;
        $link_youtube = $request->link_youtube == "" ? NULL :  $request->link_youtube;

        Tour::insert([
            'name' =>  $name,
            'name_en' =>  $name_en,
            'phone' =>  $phone,
            'price' =>  $price,
            'city' =>  $city,
            'category_id' =>  $category_id,
            'facilities' =>  $facilities,
            'facilities_en' =>  $facilities_en,
            'description' =>  $description,
            'description_en' =>  $description_en,
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
        session()->flash('msg', "<h5>Berhasil</h5><p>Wisata Berhasil Ditambahkan</p>");
        return redirect()->to('/app-admin/data/wisata');
    }

    public function ubah_wisata(Request $request)
    {
        $slug = $request->slug;

        $tour = Tour::where('slug', $slug)->first();

        if ($tour) {
            $categories = Category::where('type', 2)->orderBy('name', 'asc')->get();

            $data = [
                'categories' => $categories,
                'tour' => $tour,
            ];
            return view('admin.ubah_wisata', $data);
        } else {
            session()->flash('msg_status', 'warning');
            session()->flash('msg', "<h5>Gagal</h5><p>Data wisata tidak ditemukan !</p>");
            return redirect()->to('/app-admin/data/wisata');
        }
    }

    public function proses_ubah_wisata(Request $request)
    {
        // wajib
        $id = $request->id;
        $slug = $request->slug;
        $name = $request->name;
        $name_en = $request->name_en;
        $phone = $request->phone;
        $price = $request->price;
        $city = $request->city;
        $category_id = $request->category_id;
        $facilities = $request->facilities;
        $facilities_en = $request->facilities_en;
        $description = $request->description;
        $description_en = $request->description_en;
        $address = $request->address;
        $link_maps = $request->link_maps;

        // optional (Boleh kosong)
        $link_instagram = $request->link_instagram == "" ? NULL :  $request->link_instagram;
        $link_facebook = $request->link_facebook == "" ? NULL :  $request->link_facebook;
        $link_tiktok = $request->link_tiktok == "" ? NULL :  $request->link_tiktok;
        $link_youtube = $request->link_youtube == "" ? NULL :  $request->link_youtube;


        $data_tour = Tour::where('id', $id)->first();

        $rules = [];

        if ($request->slug != $data_tour->slug) {
            $rules['slug'] = 'required|unique:tours';
        } else {
            $rules['slug'] = 'required';
        }

        if ($request->phone != $data_tour->phone) {
            $rules['phone'] = 'required|unique:tours';
        } else {
            $rules['phone'] = 'required';
        }

        $rules['image'] = 'image';

        $validateData = $request->validate($rules, [
            'phone.unique' => 'No. Handphone : ' . $phone . ' sudah terdaftar !',
            'slug.unique' => 'Slug : ' . $slug . ' sudah terdaftar !',
            'image.image' => 'File harus berupa gambar !',
        ]);

        if ($request->file('image')) {
            if ($data_tour->picture != NULL) {
                unlink(('./assets/wisata/') . $data_tour->picture);
            }
            $image = $request->file('image');
            $nameImage = Str::random(40) . '.' . $image->getClientOriginalExtension();
            $image->move('./assets/wisata/', $nameImage);
        } else {
            $nameImage = $request->picture_old;
        }

        Tour::where('id', $id)
            ->update([
                'name' =>  $name,
                'name_en' =>  $name_en,
                'phone' =>  $phone,
                'price' =>  $price,
                'city' =>  $city,
                'category_id' =>  $category_id,
                'facilities' =>  $facilities,
                'facilities_en' =>  $facilities_en,
                'description' =>  $description,
                'description_en' =>  $description_en,
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
        session()->flash('msg', "<h5>Berhasil</h5><p>Wisata Berhasil Diubah</p>");
        return redirect()->to('app-admin/data/ubah/wisata/' . $slug);
    }

    public function proses_hapus_wisata(Request $request)
    {
        $slug = $request->slug;
        $tour = Tour::where('slug', $slug)->first();

        if ($tour) {
            unlink(('./assets/wisata/') . $tour->picture);
            Tour::where('slug', $slug)->delete();
            session()->flash('msg_status', 'success');
            session()->flash('msg', "<h5>Berhasil</h5><p>Data wisata berhasil dihapus !</p>");
            return redirect()->to('/app-admin/data/wisata');
        } else {
            session()->flash('msg_status', 'warning');
            session()->flash('msg', "<h5>Gagal</h5><p>Data wisata tidak ditemukan !</p>");
            return redirect()->to('/app-admin/data/wisata');
        }
    }

    public function admin_wisata_kategori()
    {
        $categories = Category::where('type', 2)->orderBy('name', 'asc')->get();

        $data = [
            'categories' => $categories,
        ];
        return view('admin.kategori_wisata', $data);
    }

    public function proses_tambah_kategori_wisata(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => Rule::unique('categories')->where(function ($query) {
                    return $query->where('type', 2);
                }),
                'name_en' => Rule::unique('categories')->where(function ($query) {
                    return $query->where('type', 2);
                }),
            ],
            [
                'name.unique' => 'Nama Kategori (Indonesia) sudah ada !',
                'name_en.unique' => 'Nama Kategori (Inggris) sudah ada !',
            ]
        );

        Category::insert([
            'name' =>  $request->name,
            'name_en' =>  $request->name_en,
            'type' => 2,
        ]);

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Kategori Berhasil Ditambahkan</p>");
        return redirect()->to('/app-admin/data/wisata/kategori');
    }

    public function proses_ubah_kategori_wisata(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $name_en = $request->name_en;

        $category_name = Category::where("name", $name)->where('type', 2)->first();
        $category_name_en = Category::where("name_en", $name_en)->where('type', 2)->first();

        $data_category = Category::where("id", $id)->where('type', 2)->first();

        if ($category_name != null && $data_category->name != $name) {
            session()->flash('msg_status', 'warning');
            session()->flash('msg', "<h5>Gagal</h5><p>Kategori : $name (Indonesia) sudah terdaftar !</p>");
            return redirect()->to('/app-admin/data/wisata/kategori');
        } else if ($category_name_en != null && $data_category->name_en != $name_en) {
            session()->flash('msg_status', 'warning');
            session()->flash('msg', "<h5>Gagal</h5><p>Kategori : $name_en (Inggris) sudah terdaftar !</p>");
            return redirect()->to('/app-admin/data/wisata/kategori');
        } else {
            Category::where('id', $id)
                ->update([
                    'name' =>  $name,
                    'name_en' =>  $name_en,
                ]);

            session()->flash('msg_status', 'success');
            session()->flash('msg', "<h5>Berhasil</h5><p>Kategori Berhasil Diubah</p>");
            return redirect()->to('/app-admin/data/wisata/kategori');
        }
    }

    public function proses_hapus_kategori_wisata(Request $request)
    {
        $category = Category::where('id', $request->id)->where('type', 2)->first();

        if ($category) {
            $tour = Tour::where('category_id', $category->id)->first();
            if ($tour) {
                session()->flash('msg_status', 'warning');
                session()->flash('msg', "<h5>Gagal</h5><p>Data Kategori Sudah Digunakan !</p>");
                return redirect()->to('/app-admin/data/wisata/kategori');
            } else {
                Category::where('id', $request->id)->delete();
                session()->flash('msg_status', 'success');
                session()->flash('msg', "<h5>Berhasil</h5><p>Kategori Berhasil Dihapus</p>");
                return redirect()->to('/app-admin/data/wisata/kategori');
            }
        } else {
            session()->flash('msg_status', 'warning');
            session()->flash('msg', "<h5>Gagal</h5><p>Data Kategori Tidak Ditemukan !</p>");
            return redirect()->to('/app-admin/data/wisata/kategori');
        }
    }
}
