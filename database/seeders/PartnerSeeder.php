<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // type :
        // 1 = tour
        // 2 = mart / shop
        // 3 = resto
        // 4 = hotel -> Akomodasi
        $partners = ([
            ([
                "username"   => "tour",
                "password"  => Hash::make('12345'),
                "email"  => "tour@gmail.com",
                "name"  => "Partner Tour 001",
                "phone"  => "086727273832",
                "active"  => 1,
                "type"  => 1,
                "child_id"  => 1,
            ]),
            ([
                "username"   => "shop",
                "password"  => Hash::make('12345'),
                "email"  => "shop@gmail.com",
                "name"  => "Partner Shop 001",
                "phone"  => "083646734",
                "active"  => 1,
                "type"  => 2,
                "child_id"  => 1,
            ]),
            ([
                "username"   => "resto",
                "password"  => Hash::make('12345'),
                "email"  => "resto@gmail.com",
                "name"  => "Partner Resto 001",
                "phone"  => "09873637374",
                "active"  => 1,
                "type"  => 3,
                "child_id"  => 1,
            ]),
            ([
                "username"   => "akomodasi",
                "password"  => Hash::make('12345'),
                "email"  => "akomodasi@gmail.com",
                "name"  => "Partner Akomodasi 001",
                "phone"  => "08636362342",
                "active"  => 1,
                "type"  => 4,
                "child_id"  => 1,
            ]),
        ]);

        DB::table('partners')->insert($partners);
    }
}
