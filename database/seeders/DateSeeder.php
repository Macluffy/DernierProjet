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
                "calendrier"=>"23-10-21",
            ],
            [
                "calendrier"=>"24-10-21",
            ],
            [
                "calendrier"=>"25-10-21",
            ],
            [
                "calendrier"=>"26-10-21",
            ],
            [
                "calendrier"=>"27-10-21",
            ],
            [
                "calendrier"=>"28-10-21",
            ],
            [
                "calendrier"=>"29-10-21",
            ],
            [
                "calendrier"=>"30-10-21",
            ],
            [
                "calendrier"=>"31-10-21",
            ],
            [
                "calendrier"=>"01-11-21",
            ],
            [
                "calendrier"=>"02-11-21",
            ],
            [
                "calendrier"=>"03-11-21",
            ],
            [
                "calendrier"=>"04-11-21",
            ],
            [
                "calendrier"=>"05-11-21",
            ],
            [
                "calendrier"=>"06-11-21",
            ],
            [
                "calendrier"=>"07-11-21",
            ],
            [
                "calendrier"=>"08-11-21",
            ],
            [
                "calendrier"=>"09-11-21",
            ],
            [
                "calendrier"=>"10-11-21",
            ],
            [
                "calendrier"=>"11-11-21",
            ],
            [
                "calendrier"=>"12-11-21",
            ],
        ]);
    }
}
