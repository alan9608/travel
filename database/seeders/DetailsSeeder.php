<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('details')->insert([
            'id' => 1 ,
            'user_id' => 1,
            'lastname' => 'Wilson',
            'firstname' => 'Alan',
            'birthday' => '1950-05-27',
            'portrait' => '9D76n8aWh5luwvpC7Ob7ptMMNv2fyXQqvN3K8TqJ.jpg',
            'about' => 'I live right here and this is my house',
            'created_at' => '2021-06-10 20:49:05',
            'updated_at' => '2021-06-10 20:49:05',
        ]);

    }
}