<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tickets = ([
            ([
                "tour_id"   => 1,
                "price"   => 300000,
            ]),
            ([
                "tour_id"   => 2,
                "price"   => 400000,
            ]),
            ([
                "tour_id"   => 3,
                "price"   => 500000,
            ]),
        ]);

        DB::table('tickets')->insert($tickets);
    }
}
