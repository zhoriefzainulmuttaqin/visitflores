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
            ]),
            ([
                "city"   => "Cirebon",
                "picture"   => "resto.jpg",
                "cover_picture"   => "cover-resto.jpg",
                "name"   => "Resto B",
                "slug"   => "resto-b",
                "address"   => "Jln. Pahlawan No. 70",
                "facilities"   => "Minum Gratis, Wifi, Parkir Luas",
            ]),
            ([
                "city"   => "Cirebon",
                "picture"   => "resto.jpg",
                "cover_picture"   => "cover-resto.jpg",
                "name"   => "Resto C",
                "slug"   => "resto-c",
                "address"   => "Jln. Pahlawan No. 70",
                "facilities"   => "Minum Gratis, Wifi, Parkir Luas",
            ]),
        ]);

        DB::table('restaurants')->insert($restaurants);
    }
}
