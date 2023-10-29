<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $payments = ([
            ([
                "name"              => "BNI",
                "account_name"      => "Visit Cirebon ID",
                "account_number"    => "20230231"
            ]),
            ([
                "name"              => "BRI",
                "account_name"      => "Visit Cirebon ID",
                "account_number"    => "20230231"
            ]),
            ([
                "name"              => "BCA",
                "account_name"      => "Visit Cirebon ID",
                "account_number"    => "20230231"
            ]),
            ([
                "name"              => "Mandiri",
                "account_name"      => "Visit Cirebon ID",
                "account_number"    => "20230231"
            ]),
        ]);

        DB::table('payments')->insert($payments);
    }
}
