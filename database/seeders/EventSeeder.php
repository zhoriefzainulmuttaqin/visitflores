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
                "category_id"   => 2,
                "admin_id"   => 1,
                "cover_picture"   => "berita1.png",
                "name"   => "Peristiwa 1",
                "slug"   => "peristiwa-1",
                "location"   => "Jln. Pahlawan No 90",
                "published_date"   => date('Y-m-d'),
                "published_time"   => "12:00",
                "start_date"   => date('Y-m-d'),
                "start_time"   => "12:00",
                "end_date"   => date('Y-m-d'),
                "end_time"   => "16:00",
                "details"   => "Ini details peristiwa 1",
            ]),
            ([
                "category_id"   => 2,
                "admin_id"   => 1,
                "cover_picture"   => "berita1.png",
                "name"   => "Peristiwa 2",
                "slug"   => "peristiwa-2",
                "location"   => "Jln. Pahlawan No 90",
                "published_date"   => date('Y-m-d'),
                "published_time"   => "12:00",
                "start_date"   => date('Y-m-d'),
                "start_time"   => "12:00",
                "end_date"   => date('Y-m-d'),
                "end_time"   => "16:00",
                "details"   => "Ini details peristiwa 2",
            ]),
            ([
                "category_id"   => 2,
                "admin_id"   => 1,
                "cover_picture"   => "berita1.png",
                "name"   => "Peristiwa 3",
                "slug"   => "peristiwa-3",
                "location"   => "Jln. Pahlawan No 90",
                "published_date"   => date('Y-m-d'),
                "published_time"   => "12:00",
                "start_date"   => date('Y-m-d'),
                "start_time"   => "12:00",
                "end_date"   => date('Y-m-d'),
                "end_time"   => "16:00",
                "details"   => "Ini details peristiwa 3",
            ]),
        ]);

        DB::table('events')->insert($events);
    }
}
