<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaceVisitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('place_trip')->insert([
            [
                'trip_id' => 1,
                'place_id' => 4,
                'visit_date' => '2010-11-29'
            ], [
                'trip_id' => 1,
                'place_id' => 134,
                'visit_date' => '2010-11-30'
            ], [
                'trip_id' => 1,
                'place_id' => 134,
                'visit_date' => '2010-12-01'
            ], [
                'trip_id' => 1,
                'place_id' => 5,
                'visit_date' => '2010-12-02'
            ], [
                'trip_id' => 1,
                'place_id' => 6,
                'visit_date' => '2010-12-03'
            ], [
                'trip_id' => 1,
                'place_id' => 9,
                'visit_date' => '2010-12-04'
            ], [
                'trip_id' => 1,
                'place_id' => 10,
                'visit_date' => '2010-12-05'
            ], [
                'trip_id' => 1,
                'place_id' => 7,
                'visit_date' => '2010-12-06'
            ], [
                'trip_id' => 1,
                'place_id' => 7,
                'visit_date' => '2010-12-07'
            ], [
                'trip_id' => 1,
                'place_id' => 8,
                'visit_date' => '2010-12-08'
            ], [
                'trip_id' => 1,
                'place_id' => 134,
                'visit_date' => '2010-12-09'
            ], [
                'trip_id' => 1,
                'place_id' => 134,
                'visit_date' => '2010-12-10'
            ], [
                'trip_id' => 1,
                'place_id' => 4,
                'visit_date' => '2010-12-11'
            ], [
                'trip_id' => 2,
                'place_id' => 1,
                'visit_date' => '2011-07-02'
            ], [
                'trip_id' => 2,
                'place_id' => 46,
                'visit_date' => '2011-07-03'
            ], [
                'trip_id' => 2,
                'place_id' => 47,
                'visit_date' => '2011-07-04'
            ], [
                'trip_id' => 2,
                'place_id' => 48,
                'visit_date' => '2011-07-05'
            ], [
                'trip_id' => 2,
                'place_id' => 49,
                'visit_date' => '2011-07-06'
            ], [
                'trip_id' => 2,
                'place_id' => 50,
                'visit_date' => '2011-07-07'
            ], [
                'trip_id' => 2,
                'place_id' => 50,
                'visit_date' => '2011-07-08'
            ], [
                'trip_id' => 2,
                'place_id' => 51,
                'visit_date' => '2011-07-08'
            ], [
                'trip_id' => 2,
                'place_id' => 2,
                'visit_date' => '2011-07-09'
            ], [
                'trip_id' => 3,
                'place_id' => 11,
                'visit_date' => '2014-03-17'
            ], [
                'trip_id' => 3,
                'place_id' => 134,
                'visit_date' => '2014-03-18'
            ], [
                'trip_id' => 3,
                'place_id' => 52,
                'visit_date' => '2014-03-19'
            ], [
                'trip_id' => 3,
                'place_id' => 52,
                'visit_date' => '2014-03-20'
            ], [
                'trip_id' => 3,
                'place_id' => 134,
                'visit_date' => '2014-03-21'
            ], [
                'trip_id' => 3,
                'place_id' => 53,
                'visit_date' => '2014-03-22'
            ], [
                'trip_id' => 3,
                'place_id' => 134,
                'visit_date' => '2014-03-23'
            ], [
                'trip_id' => 3,
                'place_id' => 134,
                'visit_date' => '2014-03-24'
            ], [
                'trip_id' => 3,
                'place_id' => 54,
                'visit_date' => '2014-03-25'
            ], [
                'trip_id' => 3,
                'place_id' => 134,
                'visit_date' => '2014-03-26'
            ], [
                'trip_id' => 3,
                'place_id' => 55,
                'visit_date' => '2014-03-27'
            ], [
                'trip_id' => 3,
                'place_id' => 56,
                'visit_date' => '2014-03-28'
            ], [
                'trip_id' => 3,
                'place_id' => 56,
                'visit_date' => '2014-03-29'
            ], [
                'trip_id' => 3,
                'place_id' => 134,
                'visit_date' => '2014-03-30'
            ], [
                'trip_id' => 3,
                'place_id' => 57,
                'visit_date' => '2014-03-31'
            ], [
                'trip_id' => 3,
                'place_id' => 134,
                'visit_date' => '2014-04-01'
            ], [
                'trip_id' => 3,
                'place_id' => 134,
                'visit_date' => '2014-04-02'
            ], [
              'trip_id' => 4,
              'place_id' => 11,
              'visit_date' => '2015-01-05'
            ], [
              'trip_id' => 4,
              'place_id' => 12,
              'visit_date' => '2015-01-20'
            ], [
              'trip_id' => 5,
              'place_id' => 12,
              'visit_date' => '2015-01-20'
            ], [
              'trip_id' => 5,
              'place_id' => 12,
              'visit_date' => '2015-02-04'
            ], [
              'trip_id' => 6,
              'place_id' => 13,
              'visit_date' => '2015-08-13'
            ], [
              'trip_id' => 6,
              'place_id' => 14,
              'visit_date' => '2015-08-25'
            ], [
              'trip_id' => 7,
              'place_id' => 14,
              'visit_date' => '2015-08-25'
            ], [
              'trip_id' => 7,
              'place_id' => 21,
              'visit_date' => '2015-09-09'
            ], [
              'trip_id' => 8,
              'place_id' => 28,
              'visit_date' => '2016-07-19'
            ], [
              'trip_id' => 8,
              'place_id' => 28,
              'visit_date' => '2016-07-22'
            ], [
              'trip_id' => 9,
              'place_id' => 28,
              'visit_date' => '2016-07-22'
            ], [
              'trip_id' => 9,
              'place_id' => 69,
              'visit_date' => '2016-07-29'
            ], [
              'trip_id' => 10,
              'place_id' => 69,
              'visit_date' => '2016-07-29'
            ], [
              'trip_id' => 10,
              'place_id' => 85,
              'visit_date' => '2016-08-09'
            ], [
              'trip_id' => 11,
              'place_id' => 85,
              'visit_date' => '2016-08-09'
            ], [
              'trip_id' => 11,
              'place_id' => 85,
              'visit_date' => '2016-08-16'
            ], [
              'trip_id' => 12,
              'place_id' => 86,
              'visit_date' => '2017-06-23'
            ], [
              'trip_id' => 12,
              'place_id' => 17,
              'visit_date' => '2018-07-09'
            ], [
              'trip_id' => 13,
              'place_id' => 4,
              'visit_date' => '2018-01-04'
            ], [
              'trip_id' => 13,
              'place_id' => 32,
              'visit_date' => '2018-01-15'
            ], [
              'trip_id' => 14,
              'place_id' => 32,
              'visit_date' => '2018-01-15'
            ], [
              'trip_id' => 14,
              'place_id' => 32,
              'visit_date' => '2018-01-25'
            ], [
              'trip_id' => 15,
              'place_id' => 32,
              'visit_date' => '2018-01-25'
            ], [
              'trip_id' => 15,
              'place_id' => 36,
              'visit_date' => '2018-02-08'
            ], [
              'trip_id' => 16,
              'place_id' => 14,
              'visit_date' => '2018-08-13'
            ], [
              'trip_id' => 16,
              'place_id' => 14,
              'visit_date' => '2018-08-28'
            ], [
              'trip_id' => 17,
              'place_id' => 4,
              'visit_date' => '2018-11-20'
            ], [
              'trip_id' => 17,
              'place_id' => 31,
              'visit_date' => '2018-12-01'
            ], [
              'trip_id' => 18,
              'place_id' => 31,
              'visit_date' => '2018-12-01'
            ], [
              'trip_id' => 18,
              'place_id' => 42,
              'visit_date' => '2018-12-22'
            ], [
              'trip_id' => 19,
              'place_id' => 124,
              'visit_date' => '2019-02-07'
            ], [
              'trip_id' => 19,
              'place_id' => 133,
              'visit_date' => '2019-02-21'
            ], [
              'trip_id' => 20,
              'place_id' => 12,
              'visit_date' => '2019-03-29'
            ], [
              'trip_id' => 20,
              'place_id' => 14,
              'visit_date' => '2019-03-14'
            ], [
              'trip_id' => 21,
              'place_id' => 135,
              'visit_date' => '2019-04-14'
            ], [
              'trip_id' => 21,
              'place_id' => 135,
              'visit_date' => '2019-04-27'
            ]
        ]);
    
    }
}
