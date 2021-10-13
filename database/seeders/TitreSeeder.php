<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        DB::table("titres")->insert([
            [
                
                "titre"=>"Keep Refresh & Strong Your Body ",
                "paragraphe"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer auctor pharetra iss neque. Nullam cursus elit sit amet justo interdum facilisis id at tortor.",
                
                
            ],
            [
                "titre"=>"Our Class",
                "paragraphe"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem",
            ],
            [
                "titre"=>"Class Schedule",
                "paragraphe"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem",
            ],
            [
                "titre"=>"Our Trainer",
                "paragraphe"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem",
            ],
            [
                "titre"=>"Our Gallery",
                "paragraphe"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem",
            ],
            [
                "titre"=>"Awesome Event",
                "paragraphe"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem",
            ],
            [
                "titre"=>"Pricing Table",
                "paragraphe"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown loremv",
            ],
            [
                "titre"=>"Gift Our Client Say",
                "paragraphe"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem",
            ],
        ]);
    }
}
