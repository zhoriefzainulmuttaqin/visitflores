<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // type :
        //     1 = news
        //     2 = tour
        //     - = event
        //     - = product
        //     - = food / culiner
        $categories = ([
            ([
                "name"   => "Air Terjun",
                "details"   => "Ini adalah detail Air Terjun",
                "type"   => 2,
            ]),
            ([
                "name"   => "Hutan",
                "details"   => "Ini adalah detail Hutan",
                "type"   => 2,
            ]),
            ([
                "name"   => "Gunung",
                "details"   => "Ini adalah detail Gunung",
                "type"   => 2,
            ]),
            ([
                "name"   => "Pantai",
                "details"   => "Ini adalah detail Pantai",
                "type"   => 2,
            ]),
            ([
                "name"   => "Pemandian",
                "details"   => "Ini adalah detail Pemandian",
                "type"   => 2,
            ]),
            ([
                "name"   => "Wisata Buatan",
                "details"   => "Ini adalah detail Wisata Buatan",
                "type"   => 2,
            ]),
            ([
                "name"   => "Wisata",
                "details"   => "Ini adalah detail Wisata",
                "type"   => 1,
            ]),
        ]);

        DB::table('categories')->insert($categories);
    }
}
