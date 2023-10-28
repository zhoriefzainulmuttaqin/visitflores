<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccomodationLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $links = ([
            ([
                "data_id"   => 1,
                "source_name"   => "Traveloka",
                "url"   => "https://www.traveloka.com/",
            ]),
            ([
                "data_id"   => 1,
                "source_name"   => "TIX ID",
                "url"   => "https://www.tix.id/",
            ]),
            ([
                "data_id"   => 2,
                "source_name"   => "Traveloka",
                "url"   => "https://www.traveloka.com/",
            ]),
            ([
                "data_id"   => 2,
                "source_name"   => "TIX ID",
                "url"   => "https://www.tix.id/",
            ]),
            ([
                "data_id"   => 3,
                "source_name"   => "Traveloka",
                "url"   => "https://www.traveloka.com/",
            ]),
            ([
                "data_id"   => 3,
                "source_name"   => "TIX ID",
                "url"   => "https://www.tix.id/",
            ]),
        ]);

        DB::table('accomodation_links')->insert($links);
    }
}
