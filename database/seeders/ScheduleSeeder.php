<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("schedules")->insert([
            [
                "time"=> "Time",
                "jour1_id"=> 1,
                "jour2_id"=> 2,
                "jour3_id"=> 3,
                "jour4_id"=> 4,
                "jour5_id"=> 5,
                "jour6_id"=> 6,
                "jour7_id"=> 7,
                "h1"=>"8:00 AM",
                "h2"=>"12:00 AM",
                "h3"=>"3:00 PM",
                "h4"=>"6:00 PM",
            ],
            [
                "time"=> "Time",
                "jour1_id"=> 8,
                "jour2_id"=> 9,
                "jour3_id"=> 10,
                "jour4_id"=> 11,
                "jour5_id"=> 12,
                "jour6_id"=> 13,
                "jour7_id"=> 14,
                "h1"=>"8:00 AM",
                "h2"=>"12:00 AM",
                "h3"=>"3:00 PM",
                "h4"=>"6:00 PM",
            ],
            [
                "time"=> "Time",
                "jour1_id"=> 15,
                "jour2_id"=> 16,
                "jour3_id"=> 17,
                "jour4_id"=> 18,
                "jour5_id"=> 19,
                "jour6_id"=> 20,
                "jour7_id"=> 21,
                "h1"=>"8:00 AM",
                "h2"=>"12:00 AM",
                "h3"=>"3:00 PM",
                "h4"=>"6:00 PM",
            ],
            
            
        ]);
    }
}
