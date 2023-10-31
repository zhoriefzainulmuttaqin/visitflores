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
                "city"   => "Kab. Cirebon",
                "picture"   => "batik-trusmi.jpg",
                "cover_picture"   => "batik-trusmi.jpg",
                "name"   => "Batik Trusmi",
                "slug"   => "batik-trusmi",
                "details"   => "Ini details toko a",
                "address"   => "Astapada, Kec. Tengah Tani, Kabupaten Cirebon, Jawa Barat 45153",
                "facilities"   => "Toilet, Parkir Luas",
                "phone"   => "0231321416",
                "price"   => 25000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
            ]),
            ([
                "city"   => "Kab. Cirebon",
                "picture"   => "krupuk-mlarat.jpeg",
                "cover_picture"   => "krupuk-mlarat.jpeg",
                "name"   => "Krupuk Mlarat khas Cirebon 'Sofie Mars'",
                "slug"   => "krupuk-mlarat",
                "details"   => "Ini details toko b",
                "address"   => "Astapada, Kec. Tengah Tani, Kabupaten Cirebon, Jawa Barat 45153",
                "facilities"   => "-",
                "phone"   => "2312313",
                "price"   => 10000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
            ]),
            ([
                "city"   => "Kab. Cirebon",
                "picture"   => "gapit.jpeg",
                "cover_picture"   => "gapit.jpeg",
                "name"   => "Toko Putri Tunggal Gapit Khas Cirebon",
                "slug"   => "toko-c",
                "details"   => "Ini details toko c",
                "address"   => "Jl. Silayur, Kaliwadas, Kec. Sumber, Kabupaten Cirebon, Jawa Barat 45611",
                "facilities"   => "-",
                "phone"   => "08454",
                "price"   => 12000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
            ]),
            ([
                "city"   => "Kota Cirebon",
                "picture"   => "topeng-cirebon.jpeg",
                "cover_picture"   => "topeng-cirebon.jpeg",
                "name"   => "Topeng Cirebon",
                "slug"   => "toko-d",
                "details"   => "Ini details toko c",
                "address"   => "Jl. Kesambi, Kesambi, Kec. Kesambi, Kota Cirebon",
                "facilities"   => "-",
                "phone"   => "0836253",
                "price"   => 90000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
            ]),
            ([
                "city"   => "Kota Cirebon",
                "picture"   => "terasi-udang.jpeg",
                "cover_picture"   => "terasi-udang.jpeg",
                "name"   => "Terasi Udang",
                "slug"   => "toko-e",
                "details"   => "Ini details toko",
                "address"   => "Jl. Pagongan No.15B, Pekalangan, Kec. Kejaksan, Kota Cirebon",
                "facilities"   => "-",
                "phone"   => "08675678",
                "price"   => 23000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
            ]),
            ([
                "city"   => "Kota Cirebon",
                "picture"   => "tape-ketan.jpeg",
                "cover_picture"   => "tape-ketan.jpeg",
                "name"   => "Tape Ketan Bakung",
                "slug"   => "toko-f",
                "details"   => "Ini details toko",
                "address"   => "Jl. Fatahillah Blok Kawung No.80, Megu Gede, Kec. Weru, Kabupaten Cirebon",
                "facilities"   => "-",
                "phone"   => "067875",
                "price"   => 40000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
            ]),
        ]);

        DB::table('shops')->insert($shops);
    }
}
