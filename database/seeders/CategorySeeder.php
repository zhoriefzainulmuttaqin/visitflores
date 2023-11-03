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
                "name_en"   => "Waterfall",
                "details"   => "Ini adalah detail Air Terjun",
                "details_en"   => "These are the details of the Waterfall",
                "type"   => 2,
            ]),
            ([
                "name"   => "Hutan",
                "name_en"   => "Forest",
                "details"   => "Ini adalah detail Hutan",
                "details_en"   => "These are the details of the Forest",
                "type"   => 2,
            ]),
            ([
                "name"   => "Gunung",
                "name_en"   => "Mountain",
                "details"   => "Ini adalah detail Gunung",
                "details_en"   => "These are the details of the Mountain",
                "type"   => 2,
            ]),
            ([
                "name"   => "Pantai",
                "name_en"   => "Beach",
                "details"   => "Ini adalah detail Pantai",
                "details_en"   => "These are the details of the Beach",
                "type"   => 2,
            ]),
            ([
                "name"   => "Pemandian",
                "name_en"   => "Bathing Place",
                "details"   => "Ini adalah detail Pemandian",
                "details_en"   => "These are the details of the Bathing Place",
                "type"   => 2,
            ]),
            ([
                "name"   => "Wisata Buatan",
                "name_en"   => "Artificial Tourism",
                "details"   => "Ini adalah detail Wisata Buatan",
                "details_en"   => "These are the details of the Artificial Tourism",

                "type"   => 2,
            ]),
            ([
                "name"   => "Wisata",
                "name_en"   => "Tour",
                "details"   => "Ini adalah detail Wisata",
                "details_en"   => "These are the details of the Tour",
                "type"   => 1,
            ]),
        ]);

        DB::table('categories')->insert($categories);
    }
}
