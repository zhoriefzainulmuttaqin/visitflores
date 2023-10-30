<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function berita(Request $request)
    {
        $news = News::join('categories', 'news.category_id', '=', 'categories.id')
            ->join('administrators', 'news.admin_id', '=', 'administrators.id')
            ->where('categories.type', 1)
            ->select(['news.*', 'categories.name as category_name', 'administrators.name as admin_name'])
            ->orderBy('news.published_date', 'desc')
            ->get();

        $batas = (int)(count($news) / 2);

        $data = [
            'news' => $news,
            'batas' => $batas,
        ];
        return view('user.berita', $data);
    }

    public function detail_berita(Request $request)
    {
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
            ->where('news.name', 'like',  '%' . $keyword . '%')
            ->when(!$keyword, function (Builder $query, $keyword) {
                $query->limit(5);
            })
            ->select(['news.*', 'categories.name as category_name', 'administrators.name as admin_name'])
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
