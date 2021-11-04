<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("tags")->insert([
            [
            "name"=>"#plein air"
        ],
        [
            "name"=>"#football"
        ],
        [
            "name"=>"#intérieur"
        ],
        [
            "name"=>"#collectif"
        ],
        [
            "name"=>"#duo"
        ],
        [
            "name"=>"#cardio"
        ],
        [
            "name"=>"#musculation"
        ],
        [
            "name"=>"#meditation"
        ],

        ]);
    }
}
