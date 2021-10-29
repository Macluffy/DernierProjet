<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("jours")->insert([
            [
                "day"=>"samedi",
                "date_id"=> 1,
            ],
            [
                "day"=>"dimanche",
                "date_id"=> 2,
            ],
            [
                "day"=>"lundi",
                "date_id"=> 3,
            ],
            [
                "day"=>"mardi",
                "date_id"=> 4,
            ],
            [
                "day"=>"mercredi",
                "date_id"=> 5,
            ],
            [
                "day"=>"jeudi",
                "date_id"=> 6,
            ],
            [
                "day"=>"vendredi",
                "date_id"=> 7,
            ],
            [
                "day"=>"samedi",
                "date_id"=> 8,
            ],
            [
                "day"=>"dimanche",
                "date_id"=> 9,
            ],
            [
                "day"=>"lundi",
                "date_id"=> 10,
            ],
            [
                "day"=>"mardi",
                "date_id"=> 11,
            ],
            [
                "day"=>"mercredi",
                "date_id"=> 12,
            ],
            [
                "day"=>"jeudi",
                "date_id"=> 13,
            ],
            [
                "day"=>"vendredi",
                "date_id"=> 14,
            ],
            [
                "day"=>"samedi",
                "date_id"=> 15,
            ],
            [
                "day"=>"dimanche",
                "date_id"=> 16,
            ],
            [
                "day"=>"lundi",
                "date_id"=> 17,
            ],
            [
                "day"=>"mardi",
                "date_id"=> 18,
            ],
            [
                "day"=>"mercredi",
                "date_id"=> 19,
            ],
            [
                "day"=>"jeudi",
                "date_id"=> 20,
            ],
            [
                "day"=>"vendredi",
                "date_id"=> 21,
            ],
        ]);
    }
}
