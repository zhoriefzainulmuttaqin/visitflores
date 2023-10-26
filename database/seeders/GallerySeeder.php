<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galleries = ([
            ([
                "data_id"   => 1,
                "name"   => "Foto Depan",
                "picture"   => "waduk.png",
                "type"   => 1,
            ]),
            ([
                "data_id"   => 2,
                "name"   => "Foto Depan",
                "picture"   => "waduk.png",
                "type"   => 1,
            ]),
            ([
                "data_id"   => 3,
                "name"   => "Foto Depan",
                "picture"   => "waduk.png",
                "type"   => 1,
            ]),
            ([
                "data_id"   => 1,
                "name"   => "Foto Depan",
                "picture"   => "hotel.png",
                "type"   => 2,
            ]),
            ([
                "data_id"   => 2,
                "name"   => "Foto Depan",
                "picture"   => "hotel.png",
                "type"   => 2,
            ]),
            ([
                "data_id"   => 3,
                "name"   => "Foto Depan",
                "picture"   => "hotel.png",
                "type"   => 2,
            ]),
        ]);

        DB::table('galleries')->insert($galleries);
    }
}
