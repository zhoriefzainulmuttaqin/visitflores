<?php

namespace App\Http\Controllers;

use App\Models\Accomodation;
use App\Models\AccomodationGallery;
use App\Models\AccomodationLink;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;


class AkomodasiController extends Controller
{
    public function akomodasi(Request $request)
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
        if ($request->order_price) {
            $order_price = $request->order_price;
        } else {
            $order_price = '';
        }

        $star_list = [];
        $star_list_data = [];

        if ($request->star_list) {
            $star_list = $request->star_list;
            $star_list_data = array_fill_keys($request->star_list, 'star');
        };

        $accomodations = Accomodation::when($locale, function (Builder $query, $locale) use ($keyword) {
            if ($locale == 'en') {
                $query->where('accomodations.name_en', 'like',  '%' . $keyword . '%');
            } else {
                $query->where('accomodations.name', 'like',  '%' . $keyword . '%');
            }
        })->where(function (Builder $query) use ($star_list) {
            // $query->whereIn('level', $star_list);
            $query->where(
                function (Builder $q) use ($star_list) {
                    foreach ($star_list as $key => $value) {
                        $q->orWhere('star', $value);
                    }
                }
            );
        })
            ->when($order_price, function (Builder $query, $order_price) {
                $query->orderBy("accomodations.price_start_from", $order_price);
            })
            ->orderBy('accomodations.mitra_status', 'desc')
            ->select(['accomodations.*'])
            ->paginate(10);
        if ($request->keyword) {
            $accomodations->appends(array('keyword' => $keyword));
        }
        if ($request->star_list) {
            $accomodations->appends($star_list);
        }
        if ($request->order_price) {
            $accomodations->appends(['order_price' => $request->order_price]);
        }

        $data = [
            'accomodations' => $accomodations,
            'star_list' => $star_list_data,
            'order_price' => $order_price,
        ];
        return view('user.akomodasi', $data);
    }

    public function detail_akomodasi(Request $request, Accomodation $Accomodation)
    {
        if (Cookie::get('user-language') != NULL) {
            $locale = Cookie::get('user-language');
            App::setLocale($locale);
        } else {
            $locale = "id";
            App::setLocale("id");
        }
        $accomodation = Accomodation::where('accomodations.slug', $Accomodation->slug)
            ->select(['accomodations.*',])
            ->orderBy('accomodations.name', 'asc')
            ->first();
        $AccomodationGalleries = AccomodationGallery::join('accomodations', 'accomodation_galleries.data_id', '=', 'accomodations.id')
            ->where('accomodation_galleries.data_id', $Accomodation->id)
            ->select(['accomodation_galleries.*'])
            ->get();
        $AccomodationLinks = AccomodationLink::join('accomodations', 'accomodation_links.data_id', '=', 'accomodations.id')
            ->where('accomodation_links.data_id', $Accomodation->id)
            ->select(['accomodation_links.*'])
            ->get();
        $accomodation->accomodation_galleries = $AccomodationGalleries;
        $accomodation->accomodation_links = $AccomodationLinks;
        $data = [
            'accomodation' => $accomodation,
        ];
        return view('user.detail_akomodasi', $data);
    }
    public function admin_akomodasi()
    {
        $accomodations = Accomodation::select(['accomodations.*',])
            ->orderBy('accomodations.mitra_status', 'desc')
            ->get();
        $data = [
            'accomodations' => $accomodations,
        ];
        return view('admin.akomodasi', $data);
    }
    public function tambah_akomodasi()
    {
        $cities = config('app.cities');
        $data = [
            'cities' => $cities,
        ];
        return view('admin.tambah_akomodasi', $data);
    }
    public function ubah_akomodasi(Accomodation $Accomodation)
    {
        $cities = config('app.cities');
        $data = [
            'cities' => $cities,
            'accomodation' => $Accomodation,
        ];
        return view('admin.ubah_akomodasi', $data);
    }

    public function proses_tambah_akomodasi(Request $request)
    {
        $validatedData = $request->validate(
            [
                'city' => '',
                'name' => '',
                'name_en' => '',
                'slug' => 'unique:accomodations',
                'cover_picture' => 'image',
                'details' => '',
                'details_en' => '',
                'address' => '',
                'star' => '',
                'price_start_from' => '',
                'facilities' => '',
                'facilities_en' => '',
                'phone' => '',
                'mitra_status' => '',
                'link_instagram' => '',
                'link_facebook' => '',
                'link_tiktok' => '',
                'link_youtube' => '',
                'link_maps' => '',
            ],
            [
                'slug.unique' => 'Slug sudah ada',
                'cover_picture.image' => 'File harus berupa gambar',
            ]
        );

        $validatedData['slug'] = Str::of($request->slug)->slug('-');
        $image = $request->file('cover_picture');
        $nameImage = Str::random(40) . '.' . $image->getClientOriginalExtension();
        $image->move('./assets/akomodasi/', $nameImage);

        if ($request->mitra_status == null) {
            $validatedData['mitra_status'] = '0';
        }

        switch ($validatedData['star']) {
            case '1':
                $validatedData['star'] = '20';
                break;
            case '2':
                $validatedData['star'] = '40';
                break;
            case '3':
                $validatedData['star'] = '60';
                break;
            case '4':
                $validatedData['star'] = '80';
                break;
            case '5':
                $validatedData['star'] = '100';
                break;
        }

        $validatedData['cover_picture'] = $nameImage;
        $validatedData['picture'] = $nameImage;

        Accomodation::create($validatedData);

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Akomodasi Berhasil Ditambahkan</p>");
        return redirect()->to('/app-admin/data/akomodasi');
    }
    public function proses_ubah_akomodasi(Request $request)
    {
        $checkAccomodation = Accomodation::where('slug', $request->input('slug'))->where('id', '!=', $request->input('accomodation_id'))->first();
        if ($checkAccomodation) {
            $rules = [
                'city' => '',
                'name' => '',
                'name_en' => '',
                'slug' => 'unique:accomodations',
                'cover_picture' => 'image',
                'details' => '',
                'details_en' => '',
                'address' => '',
                'star' => '',
                'price_start_from' => '',
                'facilities' => '',
                'facilities_en' => '',
                'phone' => '',
                'mitra_status' => '',
                'link_instagram' => '',
                'link_facebook' => '',
                'link_tiktok' => '',
                'link_youtube' => '',
                'link_maps' => '',
            ];
        } else {
            $rules = [
                'city' => '',
                'name' => '',
                'name_en' => '',
                'slug' => '',
                'cover_picture' => 'image',
                'details' => '',
                'details_en' => '',
                'address' => '',
                'star' => '',
                'price_start_from' => '',
                'facilities' => '',
                'facilities_en' => '',
                'phone' => '',
                'mitra_status' => '',
                'link_instagram' => '',
                'link_facebook' => '',
                'link_tiktok' => '',
                'link_youtube' => '',
                'link_maps' => '',
            ];
        }

        $validatedData = $request->validate(
            $rules,
            [
                'slug.unique' => 'Slug sudah ada',
                'cover_picture.image' => 'File harus berupa gambar',
            ]
        );

        if ($request->mitra_status == null) {
            $validatedData['mitra_status'] = '0';
        }

        switch ($validatedData['star']) {
            case '1':
                $validatedData['star'] = '20';
                break;
            case '2':
                $validatedData['star'] = '40';
                break;
            case '3':
                $validatedData['star'] = '60';
                break;
            case '4':
                $validatedData['star'] = '80';
                break;
            case '5':
                $validatedData['star'] = '100';
                break;
        }


        $validatedData['slug'] = Str::of($request->slug)->slug('-');

        if ($request->file('cover_picture')) {
            $accomodation = Accomodation::where('id', $request->input('accomodation_id'))->first();
            if ($accomodation->cover_picture != NULL) {
                unlink(('./assets/akomodasi/') . $accomodation->cover_picture);
            }
            $image = $request->file('cover_picture');
            $nameImage = Str::random(40) . '.' . $image->getClientOriginalExtension();
            $image->move('./assets/akomodasi/', $nameImage);
            $validatedData['cover_picture'] = $nameImage;
        }

        Accomodation::where('id', $request->input('accomodation_id'))->update($validatedData);
        $akomodasi = Accomodation::where('id', $request->input('accomodation_id'))->first();

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Akomodasi Berhasil Diubah</p>");
        return redirect()->to("/app-admin/data/ubah/akomodasi/$akomodasi->slug");
    }
    public function hapus_akomodasi(Accomodation $Accomodation)
    {
        unlink(('./assets/akomodasi/') . $Accomodation->cover_picture);
        $galleries = AccomodationGallery::where('data_id', $Accomodation->id)->get();
        foreach ($galleries as $value) {
            unlink(('./assets/akomodasi/') . $value->picture);
        }
        Accomodation::where('id', $Accomodation->id)->delete();
        AccomodationLink::where('data_id', $Accomodation->id)->delete();
        AccomodationGallery::where('data_id', $Accomodation->id)->delete();
        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Akomodasi Berhasil Dihapus</p>");
        return redirect()->to("/app-admin/data/akomodasi");
    }
    public function galeri_akomodasi(Accomodation $Accomodation)
    {
        $accomodationGalleries = AccomodationGallery::where('data_id', $Accomodation->id)->orderBy('name', 'desc')->get();
        $data = [
            'accomodation' => $Accomodation,
            'accomodationGalleries' => $accomodationGalleries,
        ];
        return view('admin.galeri_akomodasi', $data);
    }
    public function tambah_galeri_akomodasi(Accomodation $Accomodation)
    {
        $data = [
            'accomodation' => $Accomodation,
        ];
        return view('admin.tambah_galeri_akomodasi', $data);
    }
    public function proses_tambah_galeri_akomodasi(Request $request)
    {
        $accomodation = Accomodation::find($request->accomodation_id);
        $validatedData = $request->validate(
            [
                'name' => 'max:255',
                'name_en' => 'max:255',
                'picture' => 'image',
            ],
            [
                'name.max' => 'Nama maksimal 255 karakter',
                'name_en.max' => 'Nama maksimal 255 karakter',
                'picture.image' => 'File harus berupa gambar',
            ]
        );

        $image = $request->file('picture');
        $nameImage = Str::random(40) . '.' . $image->getClientOriginalExtension();
        $image->move('./assets/akomodasi/', $nameImage);
        $validatedData['picture'] = $nameImage;
        $validatedData['data_id'] = $accomodation->id;
        AccomodationGallery::create($validatedData);
        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Galeri Akomodasi Berhasil Ditambahkan</p>");
        return redirect()->to("/app-admin/data/galeri/akomodasi/$accomodation->slug");
    }

    public function ubah_galeri_akomodasi(Accomodation $Accomodation, AccomodationGallery $AccomodationGallery)
    {
        $data = [
            'accomodation' => $Accomodation,
            'gallery' => $AccomodationGallery,
        ];
        return view('admin.ubah_galeri_akomodasi', $data);
    }
    public function proses_ubah_galeri_akomodasi(Request $request)
    {
        $accomodation = Accomodation::find($request->accomodation_id);
        $validatedData = $request->validate(
            [
                'name' => 'max:255',
                'name_en' => 'max:255',
                'picture' => 'image',
            ],
            [
                'name.max' => 'Nama maksimal 255 karakter',
                'name_en.max' => 'Nama maksimal 255 karakter',
                'picture.image' => 'File harus berupa gambar',
            ]
        );

        $gallery = AccomodationGallery::where('id', $request->input('gallery_id'))->first();
        if ($request->file('picture')) {
            if ($gallery->picture != NULL) {
                unlink(('./assets/akomodasi/') . $gallery->picture);
            }
            $image = $request->file('picture');
            $nameImage = Str::random(40) . '.' . $image->getClientOriginalExtension();
            $image->move('./assets/akomodasi/', $nameImage);
            $validatedData['picture'] = $nameImage;
        }
        $validatedData['data_id'] = $accomodation->id;

        AccomodationGallery::where('id', $request->input('gallery_id'))->update($validatedData);
        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Galeri Akomodasi Berhasil Diubah</p>");
        return redirect()->to("/app-admin/data/ubah/galeri/akomodasi/$accomodation->slug/$gallery->id");
    }
    public function hapus_galeri_akomodasi(Accomodation $Accomodation, AccomodationGallery $AccomodationGallery)
    {
        unlink(('./assets/akomodasi/') . $AccomodationGallery->picture);
        AccomodationGallery::where('id', $AccomodationGallery->id)->delete();
        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Galeri Akomodasi Berhasil Dihapus</p>");
        return redirect()->to("/app-admin/data/galeri/akomodasi/$Accomodation->slug");
    }
    public function link_akomodasi(Accomodation $Accomodation)
    {
        $accomodationLinks = AccomodationLink::where('data_id', $Accomodation->id)->orderBy('source_name', 'asc')->get();
        $data = [
            'accomodation' => $Accomodation,
            'accomodationLinks' => $accomodationLinks,
        ];
        return view('admin.link_akomodasi', $data);
    }

    public function proses_tambah_link_akomodasi(Request $request)
    {
        $accomodation = Accomodation::find($request->accomodation_id);
        $validatedData = $request->validate(
            [
                'source_name' => '',
                'url' => '',
            ],
        );
        $validatedData['data_id'] = $accomodation->id;
        AccomodationLink::create($validatedData);
        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Link Akomodasi Berhasil Ditambahkan</p>");
        return redirect()->to("/app-admin/data/link/akomodasi/$accomodation->slug");
    }
    public function proses_ubah_link_akomodasi(Request $request)
    {
        $accomodation = Accomodation::find($request->accomodation_id);
        $validatedData = $request->validate(
            [
                'source_name' => '',
                'url' => '',
            ],
        );
        $validatedData['data_id'] = $accomodation->id;
        AccomodationLink::where('id', $request->input('gallery_id'))->update($validatedData);
        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Link Akomodasi Berhasil Diubah</p>");
        return redirect()->to("/app-admin/data/link/akomodasi/$accomodation->slug");
    }
    public function hapus_link_akomodasi(Accomodation $Accomodation, AccomodationLink $AccomodationLink)
    {
        AccomodationLink::where('id', $AccomodationLink->id)->delete();
        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Link Akomodasi Berhasil Dihapus</p>");
        return redirect()->to("/app-admin/data/link/akomodasi/$Accomodation->slug");
    }
}
