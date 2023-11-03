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
                "category_id"   => 6,
                "city"   => "Kab. Kuningan",
                "slug"   => "waduk-darma",
                "name"   => "Waduk Darma",
                "name_en"   => "Darma Reservoir",
                "picture"   => "waduk-darma.png",
                "cover_picture"   => "waduk-darma.png",
                "address"   => "Jl. Raya Darma Km 11 Kab. Kuningan",
                "facilities"   => "Perahu Wisata, Spot Foto, Taman dan Jogging Track, Kuliner Khas, Gazebo Artistik",
                "facilities_en"   => "Tour Boats, Photo Spots, Park and Jogging Track, Local Cuisine, Artistic Gazebos",
                "phone"   => "081224689599",
                "price"   => 24000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
                "link_maps"   => "https://maps.app.goo.gl/beZMGQTZ2pU2DQMk6",
            ]),
            ([
                "category_id"   => 5,
                "city"   => "Kab. Kuningan",
                "slug"   => "cibulan",
                "name"   => "Cibulan",
                "name_en"   => "Cibulan",
                "picture"   => "cibulan.jpg",
                "cover_picture"   => "cibulan.jpg",
                "address"   => "Desa Manis Kidul, Kecamatan Jalaksana, Kabupaten Kuningan, Jawa Barat - Indonesia",
                "facilities"   => "Berenang di Kolam Bersama Ikan Dewa, Berwisata Sejarah di Sumur Tujuh, Terapi Ikan, Memanah, Bermain Sepeda Gantung",
                "facilities_en"   => "Swimming in the Pool with God Fish, Exploring History at Sumur Tujuh, Fish Therapy, Archery, and Biking on Suspended Bicycles",
                "phone"   => "082124167416",
                "price"   => 25000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
                "link_maps"   => "https://maps.app.goo.gl/R2hQu7HhmiKSr5QC8",
            ]),
            ([
                "category_id"   => 1,
                "city"   => "Kab. Kuningan",
                "slug"   => "curug-bangkong",
                "name"   => "Curug Bangkong",
                "name_en"   => "Bangkong Waterfall",
                "picture"   => "curug-bangkong.jpeg",
                "cover_picture"   => "curug-bangkong.jpeg",
                "address"   => "Kertawirama, Kec. Nusaherang, Kabupaten Kuningan, Jawa Barat 45563",
                "facilities"   => "Aliran air yang deras dan jernih, Suasana alam yang asri dan sejuk, Tersedia berbagai wahana permainan air",
                "facilities_en"   => "Swift and clear water flow, Fresh and cool natural environment, Various water amusement facilities available",
                "phone"   => "089662840159",
                "price"   => 26000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
                "link_maps"   => "https://maps.app.goo.gl/cxB8h3fj9ycZqNTM8",
            ]),
            ([
                "category_id"   => 6,
                "city"   => "Kota Cirebon",
                "slug"   => "keraton-kesepuhan",
                "name"   => "Keraton Kesepuhan",
                "name_en"   => "Kesepuhan Palace",
                "picture"   => "keraton.jpg",
                "cover_picture"   => "keraton.jpg",
                "address"   => "Jl. Kasepuhan No.43, Kesepuhan, Kec. Lemahwungkuk, Kota Cirebon, Jawa Barat 45114",
                "facilities"   => "Parkir, Toilet",
                "facilities_en"   => "Parking, Toilet",
                "phone"   => "081931132884",
                "price"   => 10000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
                "link_maps"   => "https://maps.app.goo.gl/cs4KZkQW5ZhXzHNm6",
            ]),
            ([
                "category_id"   => 6,
                "city"   => "Kota Cirebon",
                "slug"   => "goa-sunyaragi",
                "name"   => "Goa Sunyaragi",
                "name_en"   => "Sunyaragi Cave",
                "picture"   => "goa-sunyaragi.jpg",
                "cover_picture"   => "goa-sunyaragi.jpg",
                "address"   => "Jln. Sunyaragi, Kec. Kesambi, Kota Cirebon, Jawa Barat 45132",
                "facilities"   => "Parkir, Toilet, Kantin",
                "facilities_en"   => "Parking, Toilet, Cafeteria",
                "phone"   => "081931132884",
                "price"   => 12000,
                "link_youtube"   => "https://www.youtube.com/",
                "link_tiktok"   => "https://www.tiktok.com/",
                "link_facebook"   => "https://www.facebook.com/",
                "link_instagram"   => "https://www.instagram.com/",
                "link_maps"   => "https://maps.app.goo.gl/5AWEcnNrz2rrJAEf7",
            ]),
        ]);

        DB::table('tours')->insert($tours);
    }
}
