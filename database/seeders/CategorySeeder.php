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
        //     2 = event
        //     3 = tour
        //     4 = product
        //     5 = food / culiner
        $categories = ([
            ([
                "name"   => "Kategori Berita 001",
                "details"   => "Ini adalah detail Kategori Berita 001",
                "type"   => 1,
            ]),
            ([
                "name"   => "Kategori Event(Peristiwa) 001",
                "details"   => "Ini adalah detail Kategori Event(Peristiwa) 001",
                "type"   => 2,
            ]),
            ([
                "name"   => "Kategori Tour 001",
                "details"   => "Ini adalah detail Kategori Tour 001",
                "type"   => 3,
            ]),
            ([
                "name"   => "Kategori Produk 001",
                "details"   => "Ini adalah detail Kategori Produk 001",
                "type"   => 4,
            ]),
            ([
                "name"   => "Kategori Kuliner 001",
                "details"   => "Ini adalah detail Kategori Kuliner 001",
                "type"   => 5,
            ]),
        ]);

        DB::table('categories')->insert($categories);
    }
}
