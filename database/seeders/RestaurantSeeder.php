<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = ([
            ([
                "city"   => "Cirebon",
                "picture"   => "resto.jpg",
                "cover_picture"   => "cover-resto.jpg",
                "name"   => "Resto A",
                "slug"   => "resto-a",
                "address"   => "Jln. Pahlawan No. 70",
                "facilities"   => "Minum Gratis, Wifi, Parkir Luas",
                "phone"   => "2312313",
                "price"   => 25000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
            ]),
            ([
                "city"   => "Cirebon",
                "picture"   => "resto.jpg",
                "cover_picture"   => "cover-resto.jpg",
                "name"   => "Resto B",
                "slug"   => "resto-b",
                "address"   => "Jln. Pahlawan No. 70",
                "facilities"   => "Minum Gratis, Wifi, Parkir Luas",
                "phone"   => "2312313",
                "price"   => 25000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
            ]),
            ([
                "city"   => "Cirebon",
                "picture"   => "resto.jpg",
                "cover_picture"   => "cover-resto.jpg",
                "name"   => "Resto C",
                "slug"   => "resto-c",
                "address"   => "Jln. Pahlawan No. 70",
                "facilities"   => "Minum Gratis, Wifi, Parkir Luas",
                "phone"   => "2312313",
                "price"   => 25000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
            ]),
        ]);

        DB::table('restaurants')->insert($restaurants);
    }
}
