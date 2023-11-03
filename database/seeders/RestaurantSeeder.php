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
                "city"   => "Kota Cirebon",
                "picture"   => "empal-gentong.jpg",
                "cover_picture"   => "empal-gentong.jpg",
                "name"   => "Empal Gentong H. Apud",
                "name_en"   => "Empal Gentong H. Apud",
                "slug"   => "Empal-Gentong-H-Apud",
                "address"   => "Jl. Ir. H. Juanda No.24, Battembat, Kec. Tengah Tani, Kabupaten Cirebon",
                "facilities"   => "Parkir, Toilet",
                "facilities_en"   => "Parking, Toilet",
                "phone"   => "0231211055",
                "price"   => 24000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
            ]),
            ([
                "city"   => "Kota Cirebon",
                "picture"   => "mie-koclok.jpg",
                "cover_picture"   => "mie-koclok.jpg",
                "name"   => "Mie Koclok Mang Sam",
                "name_en"   => "Mie Koclok Mang Sam",
                "slug"   => "Mie-Koclok-Mang-Sam",
                "address"   => "Jl. Pekiringan No.110, Pekalipan, Kec. Pekalipan, Kota Cirebon, Jawa Barat 45117",
                "facilities"   => "Minum Air Putih Gratis",
                "facilities_en"   => "Free Mineral Water",
                "phone"   => "-",
                "price"   => 16000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
            ]),
            ([
                "city"   => "Kota Cirebon",
                "picture"   => "nasi-jamblang.png",
                "cover_picture"   => "nasi-jamblang.png",
                "name"   => "Nasi Jamblang Mang Dul",
                "name_en"   => "Nasi Jamblang Mang Dul",
                "slug"   => "Nasi-Jamblang-Mang-Dul",
                "address"   => "Jl. DR. Cipto Mangunkusumo No.8, Pekiringan, Kec. Kesambi, Kota Cirebon, Jawa Barat 45131",
                "facilities"   => "Minum Air Putih Gratis",
                "facilities_en"   => "Free Mineral Water",
                "phone"   => "0231206564",
                "price"   => 20000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
            ]),
            ([
                "city"   => "Kota Cirebon",
                "picture"   => "docang.jpg",
                "cover_picture"   => "docang.jpg",
                "name"   => "Docang Ibu Wiwi",
                "name_en"   => "Docang Ibu Wiwi",
                "slug"   => "Docang-Ibu-Wiwi",
                "address"   => "Jl. Kesambi, Kesambi, Kec. Kesambi, Kota Cirebon",
                "facilities"   => "esteh tawar gratis",
                "facilities_en"   => "free plain iced tea",
                "phone"   => "086575345",
                "price"   => 15000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
            ]),
            ([
                "city"   => "Kota Cirebon",
                "picture"   => "nasi-lengko.jpg",
                "cover_picture"   => "nasi-lengko.jpg",
                "name"   => "Nasi Lengko Haji Barno",
                "name_en"   => "Nasi Lengko Haji Barno",
                "slug"   => "Nasi-Lengko-Haji-Barno",
                "address"   => "Jl. Pagongan No.15B, Pekalangan, Kec. Kejaksan, Kota Cirebon",
                "facilities"   => "esteh tawar gratis",
                "facilities_en"   => "free plain iced tea",
                "phone"   => "0231210064",
                "price"   => 10000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
            ]),
            ([
                "city"   => "Kab. Cirebon",
                "picture"   => "pedesan.jpg",
                "cover_picture"   => "pedesan.jpg",
                "name"   => "Pedesan Entog Mas Nana",
                "name_en"   => "Pedesan Entog Mas Nana",
                "slug"   => "Pedesan-Entog-Mas-Nana",
                "address"   => "Pedesan Entog Mas Nana",
                "facilities"   => "esteh tawar gratis",
                "facilities_en"   => "free plain iced tea",
                "phone"   => "081324034093",
                "price"   => 30000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
            ]),
        ]);

        DB::table('restaurants')->insert($restaurants);
    }
}
