<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HorraireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("horraires")->insert([
            [
                "heure"=>'08:00:00',
            ],
            [
                "heure"=>'12:00.00',
            ],
            [
                "heure"=>'15:00:00',
            ],
            [
                "heure"=>'18:00:00',
            ],
        ]); 
    }
}
