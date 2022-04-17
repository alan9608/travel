<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TripSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\PlaceSeeder;
use Database\Seeders\ProfileSeeder;
use Database\Seeders\PlaceVisitSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TripSeeder::class,
            PlaceSeeder::class,
            PlaceVisitSeeder::class,
            UserSeeder::class,
            ProfileSeeder::class,
         ]);
        //  \App\Models\User::factory(10)->create();
    }
}
