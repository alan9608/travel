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
            'username' => 'alan9608',
            'email_verified_at' => NULL,
            'password' => '$2y$10$yyMu0JOYdBwwdcTx0Q7cVO7BTSeiw0V1AHYDB6SiBPpS1yv6GHFpi',
            'remember_token' => NULL,
            'created_at' => '2021-05-09 15:52:15',
            'updated_at' => '2021-05-09 15:52:15',
        ]);

    }
}