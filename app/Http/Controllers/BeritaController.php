<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;


class BeritaController extends Controller
{
    public function berita(Request $request)
    {
        if (Cookie::get('user-language') != NULL) {
            $locale = Cookie::get('user-language');
            App::setLocale($locale);
        } else {
            App::setLocale("id");
        }
        $news = News::join('categories', 'news.category_id', '=', 'categories.id')
            ->join('administrators', 'news.admin_id', '=', 'administrators.id')
            ->where('categories.type', 1)
            ->select(['news.*', 'categories.name as category_name', 'categories.name_en as category_name_en', 'administrators.name as admin_name'])
            ->orderBy('news.published_date', 'desc')
            ->paginate(10);

        $batas = (int)(count($news) / 2);

        $data = [
            'news' => $news,
            'batas' => $batas,
        ];
        return view('user.berita', $data);
    }

    public function detail_berita(Request $request)
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

        $new = News::join('categories', 'news.category_id', '=', 'categories.id')
            ->join('administrators', 'news.admin_id', '=', 'administrators.id')
            ->where('categories.type', 1)
            ->where('news.slug', $request->slug)
            ->select(['news.*', 'categories.name as category_name', 'administrators.name as admin_name'])
            ->orderBy('news.published_date', 'desc')
            ->first();

        $news = News::join('categories', 'news.category_id', '=', 'categories.id')
            ->join('administrators', 'news.admin_id', '=', 'administrators.id')
            ->where('categories.type', 1)
            ->when(!$keyword, function (Builder $query, $keyword) {
                $query->limit(5);
            })
            ->when($locale, function (Builder $query, $locale) use ($keyword) {
                if ($locale == 'en') {
                    $query->where('news.name_en', 'like',  '%' . $keyword . '%');
                } else {
                    $query->where('news.name', 'like',  '%' . $keyword . '%');
                }
            })
            ->select(['news.*', 'categories.name as category_name', 'categories.name_en as category_name_en', 'administrators.name as admin_name'])
            ->orderBy('news.published_date', 'desc')
            ->get();
        $batas = (int)(count($news) / 2);

        $data = [
            'new' => $new,
            'news' => $news,
            'keyword' => $keyword,
            'batas' => $batas,
        ];
        return view('user.detail_berita', $data);
    }

    public function admin_berita()
    {
        $news = News::join('administrators', 'news.admin_id', '=', 'administrators.id')
            ->join('categories', 'news.category_id', '=', 'categories.id')
            ->orderBy('news.published_date', 'desc')
            ->where('news.admin_id', Auth::guard('admin')->user()->id)
            ->select(['news.*', 'categories.name as category_name'])
            ->get();
        $data = [
            'news' => $news,
        ];
        return view('admin.berita', $data);
    }

    public function tambah_berita()
    {
        $categories = Category::where('type', 1)->orderBy('name', 'asc')->get();

        $data = [
            'categories' => $categories,
        ];
        return view('admin.tambah_berita', $data);
    }
    public function ubah_berita(News $News)
    {
        $categories = Category::where('type', 1)->orderBy('name', 'asc')->get();

        $data = [
            'categories' => $categories,
            'new' => $News,
        ];
        return view('admin.ubah_berita', $data);
    }
    public function proses_tambah_berita(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'max:255',
                'name_en' => 'max:255',
                'slug' => 'unique:news',
                'cover_picture' => 'image',
                'content' => '',
                'content_en' => '',
                'category_id' => '',
            ],
            [
                'name.max' => 'Nama maksimal 255 karakter',
                'name_en.max' => 'Nama maksimal 255 karakter',
                'slug.unique' => 'Slug sudah ada',
                'cover_picture.image' => 'File harus berupa gambar',
            ]
        );

        $validatedData['admin_id'] = Auth::guard('admin')->user()->id;
        $validatedData['published_date'] = date('Y-m-d');
        $validatedData['slug'] = Str::of($request->slug)->slug('-');

        $image = $request->file('image');
        $nameImage = Str::random(40) . '.' . $image->getClientOriginalExtension();
        $image->move('./assets/berita/', $nameImage);
        $validatedData['cover_picture'] = $nameImage;

        News::create($validatedData);

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Berita Berhasil Ditambahkan</p>");
        return redirect()->to('/app-admin/data/berita');
    }
    public function proses_ubah_berita(Request $request)
    {
        $checkEvent = News::where('slug', $request->input('slug'))->where('id', '!=', $request->input('new_id'))->first();
        if ($checkEvent) {
            $rules = [
                'name' => 'max:255',
                'name_en' => 'max:255',
                'slug' => 'unique:news',
                'cover_picture' => 'image',
                'content' => '',
                'content_en' => '',
                'category_id' => '',
            ];
        } else {
            $rules = [
                'name' => 'max:255',
                'name_en' => 'max:255',
                'slug' => '',
                'cover_picture' => 'image',
                'content' => '',
                'content_en' => '',
                'category_id' => '',
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
            $new = News::where('id', $request->input('new_id'))->first();
            if ($new->cover_picture != NULL) {
                unlink(('./assets/berita/') . $new->cover_picture);
            }
            $image = $request->file('image');
            $nameImage = Str::random(40) . '.' . $image->getClientOriginalExtension();
            $image->move('./assets/berita/', $nameImage);
            $validatedData['cover_picture'] = $nameImage;
        }
        News::where('id', $request->input('new_id'))->update($validatedData);
        $berita = News::where('id', $request->input('new_id'))->first();

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Berita Berhasil Diubah</p>");
        return redirect()->to("/app-admin/data/ubah/berita/$berita->slug");
    }
    public function hapus_berita(News $News)
    {
        unlink(('./assets/berita/') . $News->cover_picture);
        News::where('id', $News->id)->delete();
        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Berita Berhasil Dihapus</p>");
        return redirect()->to("/app-admin/data/berita");
    }
    public function admin_berita_kategori()
    {
        $categories = Category::where('type', 1)->orderBy('name', 'asc')->get();

        $data = [
            'categories' => $categories,
        ];
        return view('admin.kategori_berita', $data);
    }

    public function proses_tambah_kategori_berita(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => Rule::unique('categories')->where(function ($query) {
                    return $query->where('type', 1);
                }),
                'name_en' => Rule::unique('categories')->where(function ($query) {
                    return $query->where('type', 1);
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
            'type' => 1,
        ]);

        session()->flash('msg_status', 'success');
        session()->flash('msg', "<h5>Berhasil</h5><p>Kategori Berhasil Ditambahkan</p>");
        return redirect()->to('/app-admin/data/berita/kategori');
    }

    public function proses_ubah_kategori_berita(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $name_en = $request->name_en;

        $category_name = Category::where("name", $name)->where('type', 1)->first();
        $category_name_en = Category::where("name_en", $name_en)->where('type', 1)->first();

        $data_category = Category::where("id", $id)->where('type', 1)->first();

        if ($category_name != null && $data_category->name != $name) {
            session()->flash('msg_status', 'warning');
            session()->flash('msg', "<h5>Gagal</h5><p>Kategori : $name (Indonesia) sudah terdaftar !</p>");
            return redirect()->to('/app-admin/data/berita/kategori');
        } else if ($category_name_en != null && $data_category->name_en != $name_en) {
            session()->flash('msg_status', 'warning');
            session()->flash('msg', "<h5>Gagal</h5><p>Kategori : $name_en (Inggris) sudah terdaftar !</p>");
            return redirect()->to('/app-admin/data/berita/kategori');
        } else {
            Category::where('id', $id)
                ->update([
                    'name' =>  $name,
                    'name_en' =>  $name_en,
                ]);

            session()->flash('msg_status', 'success');
            session()->flash('msg', "<h5>Berhasil</h5><p>Kategori Berhasil Diubah</p>");
            return redirect()->to('/app-admin/data/berita/kategori');
        }
    }

    public function proses_hapus_kategori_berita(Request $request)
    {
        $category = Category::where('id', $request->id)->where('type', 1)->first();

        if ($category) {
            $New = News::where('category_id', $category->id)->first();
            if ($New) {
                session()->flash('msg_status', 'warning');
                session()->flash('msg', "<h5>Gagal</h5><p>Data Kategori Sudah Digunakan !</p>");
                return redirect()->to('/app-admin/data/berita/kategori');
            } else {
                Category::where('id', $request->id)->delete();
                session()->flash('msg_status', 'success');
                session()->flash('msg', "<h5>Berhasil</h5><p>Kategori Berhasil Dihapus</p>");
                return redirect()->to('/app-admin/data/berita/kategori');
            }
        } else {
            session()->flash('msg_status', 'warning');
            session()->flash('msg', "<h5>Gagal</h5><p>Data Kategori Tidak Ditemukan !</p>");
            return redirect()->to('/app-admin/data/berita/kategori');
        }
    }
}
