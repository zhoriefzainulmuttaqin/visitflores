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
                "option_code" => "tourism_card_price",
                "option_value" => "25000",
            ]),
            ([
                "option_code" => "cs_phone",
                "option_value" => "+6281392786802",
            ]),
            ([
                "option_code" => "email",
                "option_value" => "ujicobantt@gmail.com",
            ]),
            ([
                "option_code" => "slogan",
                "option_value" => "Never-Ending Experience",
            ]),
            ([
                "option_code" => "fb_link",
                "option_value" => "https://facebook.com/",
            ]),
            ([
                "option_code" => "ig_link",
                "option_value" => "https://instagram.com/",
            ]),
            ([
                "option_code" => "tiktok_link",
                "option_value" => "https://tiktok.com/",
            ]),
            ([
                "option_code" => "youtube_link",
                "option_value" => "https://www.youtube.com",
            ])
        ]);

        Option::insert($options);
    }
}
