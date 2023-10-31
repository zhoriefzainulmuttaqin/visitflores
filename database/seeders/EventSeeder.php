<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = ([
            ([
                "admin_id"   => 1,
                "cover_picture"   => "pentas-seni.jpg",
                "name"   => "Pentas Seni & Festifal Band",
                "slug"   => "pentas-seni",
                "location"   => "Kantor Bupati, Cirebon",
                "published_date"   => "2023-10-20",
                "published_time"   => "12:00",
                "start_date"   => "2023-10-31",
                "start_time"   => "12:00",
                "end_date"   => "2023-10-31",
                "end_time"   => "16:00",
                "details"   => "Ayoo ikut serta dan menangkan hadiahnya",
            ]),
            ([
                "admin_id"   => 1,
                "cover_picture"   => "pentas-seni.jpg",
                "name"   => "Pentas Seni & Festifal Band",
                "slug"   => "pentas-seni",
                "location"   => "Kantor Bupati, Cirebon",
                "published_date"   => "2022-10-07",
                "published_time"   => "12:00",
                "start_date"   => "2022-10-10",
                "start_time"   => "12:00",
                "end_date"   => "2022-10-10",
                "end_time"   => "16:00",
                "details"   => "Ayoo ikut serta dan menangkan hadiahnya",
            ]),
            ([
                "admin_id"   => 1,
                "cover_picture"   => "pentas-seni.jpg",
                "name"   => "Pentas Seni & Festifal Band",
                "slug"   => "pentas-seni",
                "location"   => "Kantor Bupati, Cirebon",
                "published_date"   => "2021-10-11",
                "published_time"   => "12:00",
                "start_date"   => "2021-10-12",
                "start_time"   => "12:00",
                "end_date"   => "2021-10-12",
                "end_time"   => "16:00",
                "details"   => "Ayoo ikut serta dan menangkan hadiahnya",
            ]),
            ([
                "admin_id"   => 1,
                "cover_picture"   => "pentas-seni.jpg",
                "name"   => "Pentas Seni & Festifal Band",
                "slug"   => "pentas-seni",
                "location"   => "Kantor Bupati, Cirebon",
                "published_date"   => "2020-10-11",
                "published_time"   => "12:00",
                "start_date"   => "2020-10-12",
                "start_time"   => "12:00",
                "end_date"   => "2020-10-12",
                "end_time"   => "16:00",
                "details"   => "Ayoo ikut serta dan menangkan hadiahnya",
            ]),
            ([
                "admin_id"   => 1,
                "cover_picture"   => "pentas-seni.jpg",
                "name"   => "Pentas Seni & Festifal Band",
                "slug"   => "pentas-seni",
                "location"   => "Kantor Bupati, Cirebon",
                "published_date"   => "2019-10-11",
                "published_time"   => "12:00",
                "start_date"   => "2019-10-12",
                "start_time"   => "12:00",
                "end_date"   => "2019-10-12",
                "end_time"   => "16:00",
                "details"   => "Ayoo ikut serta dan menangkan hadiahnya",
            ]),
            ([
                "admin_id"   => 1,
                "cover_picture"   => "pentas-seni.jpg",
                "name"   => "Pentas Seni & Festifal Band",
                "slug"   => "pentas-seni",
                "location"   => "Kantor Bupati, Cirebon",
                "published_date"   => "2018-10-11",
                "published_time"   => "12:00",
                "start_date"   => "2018-10-12",
                "start_time"   => "12:00",
                "end_date"   => "2018-10-12",
                "end_time"   => "16:00",
                "details"   => "Ayoo ikut serta dan menangkan hadiahnya",
            ]),
        ]);

        DB::table('events')->insert($events);
    }
}
