<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tours = ([
            ([
                "category_id"   => 3,
                "city"   => "Cirebon",
                "slug"   => "cirebon-tour",
                "name"   => "Sunyaragi Tour",
                "picture"   => "tour.png",
                "cover_picture"   => "cover-tour.png",
                "address"   => "Jln. Pahlawan No 45, Cirebon",
                "facilities"   => "Mobil AC, Makan Gratis, Tiker Gratis",
                "phone"   => "4231432",
                "price"   => 24000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
            ]),
            ([
                "category_id"   => 3,
                "city"   => "Tegal",
                "slug"   => "Tegal-tour",
                "name"   => "Pantai Indah Tour",
                "picture"   => "tour.png",
                "cover_picture"   => "cover-tour.png",
                "address"   => "Jln. Pahlawan No 45, Tegal",
                "facilities"   => "Mobil AC, Makan Gratis, Tiker Gratis",
                "phone"   => "2312313",
                "price"   => 25000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
            ]),
            ([
                "category_id"   => 3,
                "city"   => "Pemalang",
                "slug"   => "Pemalang-tour",
                "name"   => "Hutan Indah Tour",
                "picture"   => "tour.png",
                "cover_picture"   => "cover-tour.png",
                "address"   => "Jln. Pahlawan No 45, Pemalang",
                "facilities"   => "Mobil AC, Makan Gratis, Tiker Gratis",
                "phone"   => "77636345",
                "price"   => 26000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
            ]),
        ]);

        DB::table('tours')->insert($tours);
    }
}
