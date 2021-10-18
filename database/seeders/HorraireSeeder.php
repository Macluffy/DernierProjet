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
                "heure"=>"8.00 Am-12.00Am",
            ],
            [
                "heure"=>"12.00 Am-3.00Pm",
            ],
            [
                "heure"=>"3.00 Pm-6.00Pm",
            ],
            [
                "heure"=>"6.00 Pm-9.00Pm",
            ],
        ]);
    }
}
