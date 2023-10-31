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
                "picture"   => "hotel.png",
                "cover_picture"   => "bg.png",
                "name"   => "The Luxton Cirebon Hotel & Convention",
                "slug"   => "hotel",
                "details"   => "ini details tentang akomodasi hotel yang ada di cirebon",
                "address"   => "R.A Jl. Kartini No.60, Sukapura, Kec. Kejaksan, Kota Cirebon, Jawa Barat 45122",
                "star"   => 80,
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
                "picture"   => "hotel.png",
                "cover_picture"   => "bg.png",
                "name"   => "The Luxton Cirebon Hotel & Convention",
                "slug"   => "hotel",
                "details"   => "ini details tentang akomodasi hotel yang ada di cirebon",
                "address"   => "R.A Jl. Kartini No.60, Sukapura, Kec. Kejaksan, Kota Cirebon, Jawa Barat 45122",
                "star"   => 80,
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
                "picture"   => "hotel.png",
                "cover_picture"   => "bg.png",
                "name"   => "The Luxton Cirebon Hotel & Convention",
                "slug"   => "hotel",
                "details"   => "ini details tentang akomodasi hotel yang ada di cirebon",
                "address"   => "R.A Jl. Kartini No.60, Sukapura, Kec. Kejaksan, Kota Cirebon, Jawa Barat 45122",
                "star"   => 80,
                "price_start_from"   => 500000,
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
