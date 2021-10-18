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
                "genre_id"=>1,
                "horraire_id"=>1,
            ],
            [
                "image"=>"2.jpg",
                "titre"=>"yoga for climbers",
                "nom"=>"Sathi Bhuiyan",
                "genre_id"=>2,
                "horraire_id"=>2,
                
            ],
            [
                "image"=>"3.jpg",
                "titre"=>"yoga for climbers",
                "nom"=>"Sathi Bhuiyan",
                "genre_id"=>3,
                "horraire_id"=>3,
            ],
            
        ]);
    }
}
