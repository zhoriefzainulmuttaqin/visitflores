<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::insert([
            'name' => "Ahmad",
            'username' => 'ahmad',
            'password' => Hash::make('123456789'),
            'email' => 'ahmad@gmail.com',
            'phone' => '089123123',
            'address' => 'Talun',
            'picture' => null,
            'active' => 1,
        ]);
    }
}
