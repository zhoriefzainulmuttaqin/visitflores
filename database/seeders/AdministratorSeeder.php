<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $administrators = ([
            ([
                "username"   => "admin",
                "password"   => Hash::make('12345'),
                "email"   => "admin@gmail.com",
                "name"   => "Admin 001",
                "phone"   => "08672727182",
                "active"   => 1,
            ]),
        ]);

        DB::table('administrators')->insert($administrators);
    }
}
