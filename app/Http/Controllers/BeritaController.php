<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class BeritaController extends Controller
{
    public function berita(Request $request)
    {
        $locale = Cookie::get('user-language');
        App::setLocale($locale);
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

        $locale = Cookie::get('user-language');
        App::setLocale($locale);
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
}
