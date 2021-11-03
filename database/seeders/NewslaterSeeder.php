<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewslaterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('newslaters')->insert([
            ["titre"=>"Subscribe Now For Latest Update!",
            "btn"=>"submit"]
        ]);
    }
}
