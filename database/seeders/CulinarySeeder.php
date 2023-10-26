<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CulinarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $culinaries = ([
            ([
                "category_id"   => 5,
                "restaurant_id"   => 1,
                "name"   => "Mie",
                "picture"   => "mie.png",
                "slug"   => "mie",
                "details"   => "ini adalah details mie",
                "price"   => 10000,
            ]),
            ([
                "category_id"   => 5,
                "restaurant_id"   => 2,
                "name"   => "Nasi",
                "picture"   => "nasi.png",
                "slug"   => "nasi",
                "details"   => "ini adalah details nasi",
                "price"   => 3000,
            ]),
            ([
                "category_id"   => 5,
                "restaurant_id"   => 3,
                "name"   => "Empal",
                "picture"   => "empal.png",
                "slug"   => "empal",
                "details"   => "ini adalah details empal",
                "price"   => 1000,
            ]),
        ]);

        DB::table('culinaries')->insert($culinaries);
    }
}
