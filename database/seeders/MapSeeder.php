<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maps')->insert([
            [   
            "voie"=>"admin",
            "nom"=>"admin",
            "numero"=>"admin",
            "ville"=>"admin",    
            ],
            
            
        ]);
    }
}
