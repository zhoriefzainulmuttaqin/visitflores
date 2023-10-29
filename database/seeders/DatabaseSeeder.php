<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            AdministratorSeeder::class,
            AccomodationSeeder::class,
            CategorySeeder::class,
            EventSeeder::class,
            AccomodationGallerySeeder::class,
            AccomodationLinkSeeder::class,
            NewsSeeder::class,
            PartnerSeeder::class,
            RestaurantSeeder::class,
            ShopSeeder::class,
            TourSeeder::class,
            UserSeeder::class,
        ]);
    }
}
