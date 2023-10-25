<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = ([
            ([
                "category_id"   => 4,
                "shop_id"   => 1,
                "name"   => "Topeng",
                "picture"   => "topeng.png",
                "slug"   => "topeng",
                "details"   => "ini adalah details Topeng",
                "price"   => 10000,
                "unit"   => "box",
            ]),
            ([
                "category_id"   => 4,
                "shop_id"   => 2,
                "name"   => "Tape",
                "picture"   => "tape.png",
                "slug"   => "tape",
                "details"   => "ini adalah details Tape",
                "price"   => 3000,
                "unit"   => "box",
            ]),
            ([
                "category_id"   => 4,
                "shop_id"   => 3,
                "name"   => "Terasi",
                "picture"   => "terasi.png",
                "slug"   => "terasi",
                "details"   => "ini adalah details Terasi",
                "price"   => 1000,
                "unit"   => "box",
            ]),
        ]);

        DB::table('products')->insert($products);
    }
}
