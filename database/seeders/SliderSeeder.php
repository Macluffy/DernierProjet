<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("sliders")->insert([
            [
                "imagefond"=>"img/slider/slider1.jpg",
                "minititre"=>"Welcome Our Handstand",
                "btnreadmore"=>"read more",
                
            ],
            [
                "imagefond"=>"img/slider/slider2.jpg",
                "minititre"=>"Welcome Our Handstand",
                "btnreadmore"=>"read more",
                
            ]
        ]);
    }
}
