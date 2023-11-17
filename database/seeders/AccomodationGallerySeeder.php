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
                "name"   => "Galeri Hotel Grand Tryas",
                "name_en"   => "Grand Tryas Hotel gallery",
                "picture"   => "galeri-gtr1.png",
            ]),
            ([
                "data_id"   => 1,
                "name"   => "Galeri Hotel Grand Tryas",
                "name_en"   => "Grand Tryas Hotel gallery",
                "picture"   => "galeri-gtr2.png",
            ]),
            ([
                "data_id"   => 1,
                "name"   => "Galeri Hotel Grand Tryas",
                "name_en"   => "Grand Tryas Hotel gallery",
                "picture"   => "galeri-gtr3.png",
            ]),
            ([
                "data_id"   => 1,
                "name"   => "Galeri Hotel Grand Tryas",
                "name_en"   => "Grand Tryas Hotel gallery",
                "picture"   => "galeri-gtr4.png",
            ]),
            ([
                "data_id"   => 1,
                "name"   => "Galeri Hotel Grand Tryas",
                "name_en"   => "Grand Tryas Hotel gallery",
                "picture"   => "galeri-gtr5.png",
            ]),
            ([
                "data_id"   => 1,
                "name"   => "Galeri Hotel Grand Tryas",
                "name_en"   => "Grand Tryas Hotel gallery",
                "picture"   => "galeri-gtr6.png",
            ]),
            ([
                "data_id"   => 2,
                "name"   => "Galeri Hotel Tryas",
                "name_en"   => "Tryas Hotel gallery",
                "picture"   => "galeri-tryashotel-1.png",
            ]),
            ([
                "data_id"   => 2,
                "name"   => "Galeri Hotel Tryas",
                "name_en"   => "Tryas Hotel gallery",
                "picture"   => "galeri-tryashotel-2.png",
            ]),
            ([
                "data_id"   => 2,
                "name"   => "Galeri Hotel Tryas",
                "name_en"   => "Tryas Hotel gallery",
                "picture"   => "galeri-tryashotel-3.png",
            ]),
            ([
                "data_id"   => 2,
                "name"   => "Galeri Hotel Tryas",
                "name_en"   => "Tryas Hotel gallery",
                "picture"   => "galeri-tryashotel-4.png",
            ]),
            ([
                "data_id"   => 2,
                "name"   => "Galeri Hotel Tryas",
                "name_en"   => "Tryas Hotel gallery",
                "picture"   => "galeri-tryashotel-5.png",
            ]),
            ([
                "data_id"   => 2,
                "name"   => "Galeri Hotel Tryas",
                "name_en"   => "Tryas Hotel gallery",
                "picture"   => "galeri-tryashotel-6.png",
            ]),
            ([
                "data_id"   => 3,
                "name"   => "Galeri hotel verse",
                "name_en"   => "Verse hotel gallery",
                "picture"   => "galeri-verse-1.webp",
            ]),
            ([
                "data_id"   => 3,
                "name"   => "Galeri hotel verse",
                "name_en"   => "Verse hotel gallery",
                "picture"   => "galeri-verse-2.webp",
            ]),
            ([
                "data_id"   => 3,
                "name"   => "Galeri hotel verse",
                "name_en"   => "Verse hotel gallery",
                "picture"   => "galeri-verse-3.webp",
            ]),
            ([
                "data_id"   => 3,
                "name"   => "Galeri hotel verse",
                "name_en"   => "Verse hotel gallery",
                "picture"   => "galeri-verse-4.png",
            ]),
            ([
                "data_id"   => 3,
                "name"   => "Galeri hotel verse",
                "name_en"   => "Verse hotel gallery",
                "picture"   => "galeri-verse-5.png",
            ]),
            ([
                "data_id"   => 3,
                "name"   => "Galeri hotel verse",
                "name_en"   => "Verse hotel gallery",
                "picture"   => "galeri-verse-6.png",
            ]),
            ([
                "data_id"   => 3,
                "name"   => "Galeri hotel verse",
                "name_en"   => "Verse hotel gallery",
                "picture"   => "galeri-verse-7.png",
            ]),
            ([
                "data_id"   => 3,
                "name"   => "Galeri hotel verse",
                "name_en"   => "Verse hotel gallery",
                "picture"   => "galeri-verse-8.png",
            ]),
            ([
                "data_id"   => 4,
                "name"   => "Galeri hotel batiqa",
                "name_en"   => "Batiqa hotel gallery",
                "picture"   => "galeri-batiqa-1.webp",
            ]),
            ([
                "data_id"   => 4,
                "name"   => "Galeri hotel batiqa",
                "name_en"   => "Batiqa hotel gallery",
                "picture"   => "galeri-batiqa-2.webp",
            ]),
            ([
                "data_id"   => 4,
                "name"   => "Galeri hotel batiqa",
                "name_en"   => "Batiqa hotel gallery",
                "picture"   => "galeri-batiqa-3.webp",
            ]),
            ([
                "data_id"   => 4,
                "name"   => "Galeri hotel batiqa",
                "name_en"   => "Batiqa hotel gallery",
                "picture"   => "galeri-batiqa-4.png",
            ]),
            ([
                "data_id"   => 4,
                "name"   => "Galeri hotel batiqa",
                "name_en"   => "Batiqa hotel gallery",
                "picture"   => "galeri-batiqa-5.png",
            ]),
            ([
                "data_id"   => 4,
                "name"   => "Galeri hotel batiqa",
                "name_en"   => "Batiqa hotel gallery",
                "picture"   => "galeri-batiqa-6.png",
            ]),
            ([
                "data_id"   => 5,
                "name"   => "Galeri hotel cordela",
                "name_en"   => "Cordela hotel gallery",
                "picture"   => "galeri-cordela-1.webp",
            ]),
            ([
                "data_id"   => 5,
                "name"   => "Galeri hotel cordela",
                "name_en"   => "Cordela hotel gallery",
                "picture"   => "galeri-cordela-2.webp",
            ]),
            ([
                "data_id"   => 5,
                "name"   => "Galeri hotel cordela",
                "name_en"   => "Cordela hotel gallery",
                "picture"   => "galeri-cordela-3.webp",
            ]),
            ([
                "data_id"   => 5,
                "name"   => "Galeri hotel cordela",
                "name_en"   => "Cordela hotel gallery",
                "picture"   => "galeri-cordela-4.png",
            ]),
            ([
                "data_id"   => 5,
                "name"   => "Galeri hotel cordela",
                "name_en"   => "Cordela hotel gallery",
                "picture"   => "galeri-cordela-5.png",
            ]),
            ([
                "data_id"   => 5,
                "name"   => "Galeri hotel cordela",
                "name_en"   => "Cordela hotel gallery",
                "picture"   => "galeri-cordela-6.png",
            ]),
            ([
                "data_id"   => 5,
                "name"   => "Galeri hotel cordela",
                "name_en"   => "Cordela hotel gallery",
                "picture"   => "galeri-cordela-7.png",
            ]),
            ([
                "data_id"   => 6,
                "name"   => "Galeri Swiss-Belhotel",
                "name_en"   => "Swiss-Belhotel gallery",
                "picture"   => "galeri-swiss-1.webp",
            ]),
            ([
                "data_id"   => 6,
                "name"   => "Galeri Swiss-Belhotel",
                "name_en"   => "Swiss-Belhotel gallery",
                "picture"   => "galeri-swiss-2.webp",
            ]),
            ([
                "data_id"   => 6,
                "name"   => "Galeri Swiss-Belhotel",
                "name_en"   => "Swiss-Belhotel gallery",
                "picture"   => "galeri-swiss-3.webp",
            ]),
            ([
                "data_id"   => 6,
                "name"   => "Galeri Swiss-Belhotel",
                "name_en"   => "Swiss-Belhotel gallery",
                "picture"   => "galeri-swiss-4.png",
            ]),
            ([
                "data_id"   => 6,
                "name"   => "Galeri Swiss-Belhotel",
                "name_en"   => "Swiss-Belhotel gallery",
                "picture"   => "galeri-swiss-5.png",
            ]),
            ([
                "data_id"   => 6,
                "name"   => "Galeri Swiss-Belhotel",
                "name_en"   => "Swiss-Belhotel gallery",
                "picture"   => "galeri-swiss-6.png",
            ]),
            ([
                "data_id"   => 6,
                "name"   => "Galeri Swiss-Belhotel",
                "name_en"   => "Swiss-Belhotel gallery",
                "picture"   => "galeri-swiss-7.png",
            ]),
            ([
                "data_id"   => 6,
                "name"   => "Galeri Swiss-Belhotel",
                "name_en"   => "Swiss-Belhotel gallery",
                "picture"   => "galeri-swiss-8.png",
            ]),
            ([
                "data_id"   => 7,
                "name"   => "Galeri Hotel Grage",
                "name_en"   => "Grage Hotel gallery",
                "picture"   => "galeri-grage-1.png",
            ]),
            ([
                "data_id"   => 7,
                "name"   => "Galeri Hotel Grage",
                "name_en"   => "Grage Hotel gallery",
                "picture"   => "galeri-grage-2.png",
            ]),
            ([
                "data_id"   => 7,
                "name"   => "Galeri Hotel Grage",
                "name_en"   => "Grage Hotel gallery",
                "picture"   => "galeri-grage-3.png",
            ]),
            ([
                "data_id"   => 7,
                "name"   => "Galeri Hotel Grage",
                "name_en"   => "Grage Hotel gallery",
                "picture"   => "galeri-grage-4.png",
            ]),
            ([
                "data_id"   => 7,
                "name"   => "Galeri Hotel Grage",
                "name_en"   => "Grage Hotel gallery",
                "picture"   => "galeri-grage-5.png",
            ]),
            ([
                "data_id"   => 7,
                "name"   => "Galeri Hotel Grage",
                "name_en"   => "Grage Hotel gallery",
                "picture"   => "galeri-grage-6.png",
            ]),
            ([
                "data_id"   => 7,
                "name"   => "Galeri Hotel Grage",
                "name_en"   => "Grage Hotel gallery",
                "picture"   => "galeri-grage-7.png",
            ]),
            ([
                "data_id"   => 7,
                "name"   => "Galeri Hotel Grage",
                "name_en"   => "Grage Hotel gallery",
                "picture"   => "galeri-grage-8.png",
            ]),
        ]);

        DB::table('accomodation_galleries')->insert($galleries);
    }
}
