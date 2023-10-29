<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Option;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $options = ([
            ([
                "option_code"   => "tourism_card_price",
                "option_value"  => "25000",
            ]),
            ([
                "option_code" => "cs_phone",
                "option_value" => "089123123",
            ])
        ]);

        Option::insert($options);
    }
}
