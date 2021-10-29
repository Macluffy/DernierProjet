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
                "quantiter"=>15,
                "jour_id"=>1,
                "date_id"=>1,
                "order"=>true,
            ],
            [
                "image"=>"2.jpg",
                "titre"=>"yoga for climbers",
                "nom"=>"Sathi Bhuiyan",
                "genre_id"=>2,
                "horraire_id"=>2,
                "quantiter"=>15,
                "jour_id"=>2,
                "date_id"=>2,
                "order"=>true,
            ],
            [
                "image"=>"3.jpg",
                "titre"=>"yoga for climbers",
                "nom"=>"Sathi Bhuiyan",
                "genre_id"=>3,
                "horraire_id"=>3,
                "quantiter"=>15,
                "jour_id"=>3,
                "date_id"=>3,
                "order"=>true,
            ],
            
        ]);
    }
}
