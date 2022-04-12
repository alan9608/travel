<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1 ,
            'email' => 'alan9608@gmail.com',
            'email_verified_at' => NULL,
            'password' => '$2y$10$j2h9E2fWQxPApBKi2IAunOCVQ.LJnFqEPlJ0rMHVYO5uT7MnekySi', //=password
            'remember_token' => NULL,
            'created_at' => '2021-05-09 15:52:15',
            'updated_at' => '2021-05-09 15:52:15',
        ]);

    }
}