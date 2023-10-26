<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $news = ([
            ([
                "category_id"   => 1,
                "admin_id"   => 1,
                "cover_picture"   => "berita1.png",
                "name"   => "Berita 1",
                "slug"   => "berita-1",
                "published_date"   => date('Y-m-d'),
                "content"   => "Ini adalah konten berita 1",
            ]),
            ([
                "category_id"   => 1,
                "admin_id"   => 1,
                "cover_picture"   => "berita2.png",
                "name"   => "Berita 2",
                "slug"   => "berita-2",
                "published_date"   => date('Y-m-d'),
                "content"   => "Ini adalah konten berita 2",
            ]),
            ([
                "category_id"   => 1,
                "admin_id"   => 1,
                "cover_picture"   => "berita3.png",
                "name"   => "Berita 3",
                "slug"   => "berita-3",
                "published_date"   => date('Y-m-d'),
                "content"   => "Ini adalah konten berita 3",
            ]),
        ]);

        DB::table('news')->insert($news);
    }
}
