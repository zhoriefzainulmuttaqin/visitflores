<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Gift;

class GiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $gifts = ([
            ([
                "picture"   => "oleh.png",
                "name"      => "Paket A",
                "name"      => "Package A",
                "slug"      => "paket-a",
                "price"     => 175000,
                "unit"      => "Paket",
                "weight"    => 1250,
                "contents_count"    => 10,
                "contents"  => "
                1 pc Blackthins
                1 pc Blackmond
                1 pc Kurma Tunisia 250 gram
                1 pc Chia Seed
                2 pcs Veggie Noodles
                2 pcs Wedang Uwuh
                1 pcs Habbats Drink
                1 pc Himsalt
                Box Hampers Eksklusive",
                "contents_en"  => "
                1pc Blackthin
                1 pc Blackmond
                1 pc Tunisian Dates 250 grams
                1 pc Chia Seed
                2 pcs Veggie Noodles
                2 pcs Wedang Uwuh
                1 pc Habbats Drink
                1 pc Himsalt
                Exclusive Box Hampers",
            ]),
            ([
                "picture"   => "oleh.png",
                "name"      => "Paket B",
                "slug"      => "paket-b",
                "price"     => 175000,
                "unit"      => "Paket",
                "weight"    => 1250,
                "contents_count"    => 10,
                "contents"  => "
                1 pc Blackthins
                1 pc Blackmond
                1 pc Kurma Tunisia 250 gram
                1 pc Chia Seed
                2 pcs Veggie Noodles
                2 pcs Wedang Uwuh
                1 pcs Habbats Drink
                1 pc Himsalt
                Box Hampers Eksklusive",
                "contents_en"  => "
                1 pc Blackthin
                1 pc Blackmond
                1 pc Tunisian Dates 250 grams
                1 pc Chia Seed
                2 pcs Veggie Noodles
                2 pcs Wedang Uwuh
                1 pc Habbats Drink
                1 pc Himsalt
                Exclusive Box Hampers",
            ]),
        ]);

        Gift::insert($gifts);
    }
}
