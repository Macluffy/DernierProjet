<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("dates")->insert([
            [
                "calendrier"=>'2021-10-23',
            ],
            [
                "calendrier"=>'2021-10-24',
            ],
            [
                "calendrier"=>'2021-10-25',
            ],
            [
                "calendrier"=>'2021-10-26',
            ],
            [
                "calendrier"=>'2021-10-27',
            ],
            [
                "calendrier"=>'2021-10-28',
            ],
            [
                "calendrier"=>'2021-10-29',
            ],
            [
                "calendrier"=>'2021-10-30',
            ],
            [
                "calendrier"=>'2021-10-31',
            ],
            [
                "calendrier"=>'2021-11-01',
            ],
            [
                "calendrier"=>'2021-11-02',
            ],
            [
                "calendrier"=>'2021-11-03',
            ],
            [
                "calendrier"=>'2021-11-04',
            ],
            [
                "calendrier"=>'2021-11-05',
            ],
            [
                "calendrier"=>'2021-11-06',
            ],
            [
                "calendrier"=>'2021-11-07',
            ],
            [
                "calendrier"=>'2021-11-08',
            ],
            [
                "calendrier"=>'2021-11-09',
            ],
            [
                "calendrier"=>'2021-11-10',
            ],
            [
                "calendrier"=>'2021-11-11',
            ],
            [
                "calendrier"=>'2021-11-12',
            ],
        ]);
    }
}
