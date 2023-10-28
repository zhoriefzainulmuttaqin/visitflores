<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shops = ([
            ([
                "city"   => "Cirebon",
                "picture"   => "toko.jpg",
                "cover_picture"   => "cover-toko.jpg",
                "name"   => "Toko A",
                "slug"   => "toko-a",
                "details"   => "Ini details toko a",
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
                "picture"   => "toko.jpg",
                "cover_picture"   => "cover-toko.jpg",
                "name"   => "Toko B",
                "slug"   => "toko-b",
                "details"   => "Ini details toko b",
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
                "picture"   => "toko.jpg",
                "cover_picture"   => "cover-toko.jpg",
                "name"   => "Toko C",
                "slug"   => "toko-c",
                "details"   => "Ini details toko c",
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

        DB::table('shops')->insert($shops);
    }
}
