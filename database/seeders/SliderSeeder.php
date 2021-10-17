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

                "imagefond"=>"slider1.jpg",
                "titre"=>"Keep Refresh & Strong Your Body",
                "paragraphe"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer auctor pharetra iss neque. Nullam cursus elit sit amet justo interdum facilisis id at tortor.",
                "minititre"=>"Welcome Our Handstand",
                "btnreadmore"=>"read more",
                "order"=>false,
                
                
            ],
            [
                "imagefond"=>"slider2.jpg",
                "titre"=>"Keep Refresh & Strong Your Body",
                "paragraphe"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer auctor pharetra iss neque. Nullam cursus elit sit amet justo interdum facilisis id at tortor.",
                "minititre"=>"Welcome Our Handstand",
                "btnreadmore"=>"read more",
                "order"=>true,
            ]
        ]);
    }
}
