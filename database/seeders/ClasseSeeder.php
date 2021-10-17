<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("classes")->insert([
            [
                "image"=>"1.jpg",
                "titre"=>"yoga for climbers",
                "nom"=>"Sathi Bhuiyan",
                "heure"=>"10.00Am-05:00Pm",
                
            ],
            [
                "image"=>"2.jpg",
                "titre"=>"yoga for climbers",
                "nom"=>"Sathi Bhuiyan",
                "heure"=>"10.00Am-05:00Pm",
                
            ],
            [
                "image"=>"3.jpg",
                "titre"=>"yoga for climbers",
                "nom"=>"Sathi Bhuiyan",
                "heure"=>"10.00Am-05:00Pm",
                
            ],
            
        ]);
    }
}
