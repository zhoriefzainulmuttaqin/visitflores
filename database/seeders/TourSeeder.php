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
            ]),
        ]);

        DB::table('tours')->insert($tours);
    }
}
