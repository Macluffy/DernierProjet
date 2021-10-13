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
                "titrepartie1"=>"Keep ",
                "titrepartie2"=>"Refresh & Strong",
                "titrepartie3"=>" Your Body ",
                "paragraphe"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer auctor pharetra iss neque. Nullam cursus elit sit amet justo interdum facilisis id at tortor.",
                "btnreadmore"=>"read more",
                
            ],
            [
                "imagefond"=>"img/slider/slider2.jpg",
                "minititre"=>"Welcome Our Handstand",
                "titrepartie1"=>"Keep ",
                "titrepartie2"=>"Refresh & Strong",
                "titrepartie3"=>" Your Body ",
                "paragraphe"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer auctor pharetra iss neque. Nullam cursus elit sit amet justo interdum facilisis id at tortor.",
                "btnreadmore"=>"read more",
                
            ]
        ]);
    }
}
