<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccomodationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accomodations = ([
            ([
                "city"   => "Cirebon",
                "picture"   => "akomodasi.jpg",
                "cover_picture"   => "cover-akomodasi.jpg",
                "name"   => "Aston",
                "slug"   => "aston",
                "details"   => "ini details tentang akomodasi aston yang ada di cirebon",
                "address"   => "Jl. Bahagia No 14, Cirebon Barat",
                "star"   => 4,
                "price_start_from"   => 500000,
                "facilities"   => "Wifi, TV 4K, Double Bad",
                "phone"   => "2312313",
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
                "link_maps"   => "https://maps.app.goo.gl/TLv38Mh5z1fifei68",
            ]),
            ([
                "city"   => "Cirebon",
                "picture"   => "akomodasi.jpg",
                "cover_picture"   => "cover-akomodasi.jpg",
                "name"   => "Apita",
                "slug"   => "apita",
                "details"   => "ini details tentang akomodasi Apita yang ada di Cirebon",
                "address"   => "Jl. Bahagia No 14, Cirebon Barat",
                "star"   => 5,
                "price_start_from"   => 700000,
                "facilities"   => "Wifi, TV 4K, Double Bad",
                "phone"   => "2312313",
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
                "link_maps"   => "https://maps.app.goo.gl/TLv38Mh5z1fifei68",
            ]),
            ([
                "city"   => "Cirebon",
                "picture"   => "akomodasi.jpg",
                "cover_picture"   => "cover-akomodasi.jpg",
                "name"   => "Garden",
                "slug"   => "garden",
                "details"   => "ini details tentang akomodasi Garden yang ada di Cirebon",
                "address"   => "Jl. Bahagia No 14, Cirebon Barat",
                "star"   => 3,
                "price_start_from"   => 800000,
                "facilities"   => "Wifi, TV 4K, Double Bad",
                "phone"   => "2312313",
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
                "link_maps"   => "https://maps.app.goo.gl/TLv38Mh5z1fifei68",
            ]),
        ]);

        DB::table('accomodations')->insert($accomodations);
    }
}
