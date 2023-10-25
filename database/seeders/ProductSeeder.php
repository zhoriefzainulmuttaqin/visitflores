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
                "name"   => "Pisang Goreng",
                "picture"   => "product.jpg",
                "slug"   => "pisang-goreng",
                "details"   => "ini adalah details pisang goreng",
                "price"   => 10000,
                "unit"   => "box",
            ]),
        ]);

        DB::table('products')->insert($products);
    }
}
