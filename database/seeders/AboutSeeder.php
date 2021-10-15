<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("abouts")->insert([
            [
                "titre"=>"about our handstand",
                "paragraphe1"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's s.",
                "paragraphe2"=>"but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release ",
                "btn"=>"read more",
                "image"=>"about.jpg",
                "video"=>"https://www.youtube.com/watch?v=A47zwWsjXgs",
                
            ],
            
        ]);
    }
}
