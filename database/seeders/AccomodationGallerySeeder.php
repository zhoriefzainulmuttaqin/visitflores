<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccomodationGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galleries = ([
            ([
                "data_id"   => 1,
                "name"   => "Galeri hotel aston",
                "name_en"   => "Aston hotel gallery",
                "picture"   => "galeri-aston-1.webp",
            ]),
            ([
                "data_id"   => 1,
                "name"   => "Galeri hotel aston",
                "name_en"   => "Aston hotel gallery",
                "picture"   => "galeri-aston-2.webp",
            ]),
            ([
                "data_id"   => 1,
                "name"   => "Galeri hotel aston",
                "name_en"   => "Aston hotel gallery",
                "picture"   => "galeri-aston-3.webp",
            ]),
            ([
                "data_id"   => 2,
                "name"   => "Galeri hotel verse",
                "name_en"   => "Verse hotel gallery",
                "picture"   => "galeri-verse-1.webp",
            ]),
            ([
                "data_id"   => 2,
                "name"   => "Galeri hotel verse",
                "name_en"   => "Verse hotel gallery",
                "picture"   => "galeri-verse-2.webp",
            ]),
            ([
                "data_id"   => 2,
                "name"   => "Galeri hotel verse",
                "name_en"   => "Verse hotel gallery",
                "picture"   => "galeri-verse-3.webp",
            ]),
            ([
                "data_id"   => 3,
                "name"   => "Galeri hotel batiqa",
                "name_en"   => "Batiqa hotel gallery",
                "picture"   => "galeri-batiqa-1.webp",
            ]),
            ([
                "data_id"   => 3,
                "name"   => "Galeri hotel batiqa",
                "name_en"   => "Batiqa hotel gallery",
                "picture"   => "galeri-batiqa-2.webp",
            ]),
            ([
                "data_id"   => 3,
                "name"   => "Galeri hotel batiqa",
                "name_en"   => "Batiqa hotel gallery",
                "picture"   => "galeri-batiqa-3.webp",
            ]),
            ([
                "data_id"   => 4,
                "name"   => "Galeri hotel cordela",
                "name_en"   => "Cordela hotel gallery",
                "picture"   => "galeri-cordela-1.webp",
            ]),
            ([
                "data_id"   => 4,
                "name"   => "Galeri hotel cordela",
                "name_en"   => "Cordela hotel gallery",
                "picture"   => "galeri-cordela-2.webp",
            ]),
            ([
                "data_id"   => 4,
                "name"   => "Galeri hotel cordela",
                "name_en"   => "Cordela hotel gallery",
                "picture"   => "galeri-cordela-3.webp",
            ]),
            ([
                "data_id"   => 5,
                "name"   => "Galeri hotel swiss",
                "name_en"   => "Swiss hotel gallery",
                "picture"   => "galeri-swiss-1.webp",
            ]),
            ([
                "data_id"   => 5,
                "name"   => "Galeri hotel swiss",
                "name_en"   => "Swiss hotel gallery",
                "picture"   => "galeri-swiss-2.webp",
            ]),
            ([
                "data_id"   => 5,
                "name"   => "Galeri hotel swiss",
                "name_en"   => "Swiss hotel gallery",
                "picture"   => "galeri-swiss-3.webp",
            ]),
            ([
                "data_id"   => 6,
                "name"   => "Galeri hotel grage",
                "name_en"   => "Grage hotel gallery",
                "picture"   => "galeri-grage-1.webp",
            ]),
            ([
                "data_id"   => 6,
                "name"   => "Galeri hotel grage",
                "name_en"   => "Grage hotel gallery",
                "picture"   => "galeri-grage-2.webp",
            ]),
            ([
                "data_id"   => 6,
                "name"   => "Galeri hotel grage",
                "name_en"   => "Grage hotel gallery",
                "picture"   => "galeri-grage-3.webp",
            ]),
        ]);

        DB::table('accomodation_galleries')->insert($galleries);
    }
}
