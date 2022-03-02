<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trips')->insert([
            [
              // 1
              'type_detail' => 'Azamara Journey',
              'start_date' => '2010-11-29',
              'days' => 12,
              'description' => 'Eastern Caribbean and first cruise'
            ], [
              // 2
              'type_detail' => 'Azamara Quest',
              'start_date' => '2011-07-02',
              'days' => 8,
              'description' => 'Mediterranean'
            ], [
              // 3
              'type_detail' => 'Azamara Journey',
              'start_date' => '2014-03-17',
              'days' => 18,
              'description' => 'Southeast Asia with Crew Family days'
            ], [
              // 4
              'type_detail' => 'Azamara Quest',
              'start_date' => '2015-01-05',
              'days' => 16,
              'description' => 'Vietnam and Thailand'
            ], [
              // 5
              'type_detail' => 'Azamara Quest',
              'start_date' => '2015-01-20',
              'days' => 14,
              'description' => 'Yangon and western Thailand'
            ], [
              // 6
              'type_detail' => 'Azamara Quest',
              'start_date' => '2015-08-13',
              'days' => 13,
              'description' => 'The Baltic with St. Petersburg'
            ], [
              // 7
              'type_detail' => 'Azamara Quest',
              'start_date' => '2015-08-25',
              'days' => 15,
              'description' => 'Around France and Spain'
            ], [
              // 8
              'type_detail' => 'Azamara Journey',
              'start_date' => '2016-07-19',
              'days' => 3,
              'description' => 'Short Med Sampler'
            ], [
              // 9
              'type_detail' => 'Azamara Journey',
              'start_date' => '2016-07-22',
              'days' => 7,
              'description' => 'Around Italy to Greece'
            ], [
              // 10
              'type_detail' => 'Azamara Journey',
              'start_date' => '2016-07-29',
              'days' => 11,
              'description' => 'Croatian Coast to Venice'
            ], [
              // 11
              'type_detail' => 'Azamara Journey',
              'start_date' => '2016-08-09',
              'days' => 7,
              'description' => 'Croatian Coast again'
            ], [
              // 12
              'type_detail' => 'Azamara Journey',
              'start_date' => '2017-06-23',
              'days' => 16,
              'description' => 'Norway Fjords'
            ], [
              // 13
              'type_detail' => 'Azamara Quest',
              'start_date' => '2018-01-04',
              'days' => 11,
              'description' => 'Through Panama Canal - right'
            ], [
              // 14
              'type_detail' => 'Azamara Quest',
              'start_date' => '2018-01-15',
              'days' => 10,
              'description' => 'Costa Rica Intensive'
            ], [
              // 15
              'type_detail' => 'Azamara Quest',
              'start_date' => '2018-01-25',
              'days' => 14,
              'description' => 'Western Central America'
            ], [
              // 16
              'type_detail' => 'Azamara Pursuit',
              'start_date' => '2018-08-13',
              'days' => 15,
              'description' => 'Iceland'
            ], [
              // 17
              'type_detail' => 'Azamara Pursuit',
              'start_date' => '2018-11-20',
              'days' => 11,
              'description' => 'Through Panama Canal - left'
            ], [
              // 18
              'type_detail' => 'Azamara Pursuit',
              'start_date' => '2018-12-01',
              'days' => 21,
              'description' => 'Around South America'
            ], [
              // 19
              'type_detail' => 'Azamara Quest',
              'start_date' => '2019-02-07',
              'days' => 14,
              'description' => 'Australia to New Zealand'
            ], [
              // 20
              'type_detail' => 'Azamara Quest',
              'start_date' => '2019-03-29',
              'days' => 16,
              'description' => 'Singapore to Japan'
            ], [
              // 21
              'type_detail' => 'Azamara Quest',
              'start_date' => '2019-04-14',
              'days' => 13,
              'description' => 'Japan Intensive'
            ],
            [
                'type_detail' => 'Azamara Quest',
                'start_date' => '2021-01-04',
                'days' => 23,
                'description' => 'Sailed the Pacific Ocean'
            ]
          ]);
    }
}
