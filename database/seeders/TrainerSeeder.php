<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        { DB::table("trainers")->insert([
            [
                "image"=>"trainer1.jpg",
                "titre"=>"John laisa do",
                "icon1"=>"fa fa-facebook",
                "icon2"=>"fa fa-twitter",
                "icon3"=>"fa fa-dribbble",
                "icon4"=>"fa fa-pinterest",
                "lien1"=>"https://www.facebook.com/",
                "lien2"=>"https://twitter.com/",
                "lien3"=>"https://dribbble.com/",
                "lien4"=>"https://www.pinterest.com/",
                "user_id"=>3,
            ],
            [
                "image"=>"trainer2.jpg",
                "titre"=>"John laisa do",
                "icon1"=>"fa fa-facebook",
                "icon2"=>"fa fa-twitter",
                "icon3"=>"fa fa-dribbble",
                "icon4"=>"fa fa-pinterest",
                "lien1"=>"https://www.facebook.com/",
                "lien2"=>"https://twitter.com/",
                "lien3"=>"https://dribbble.com/",
                "lien4"=>"https://www.pinterest.com/",
                "user_id"=>2,
            ],
            [
                "image"=>"trainer3.jpg",
                "titre"=>"John laisa do",
                "icon1"=>"fa fa-facebook",
                "icon2"=>"fa fa-twitter",
                "icon3"=>"fa fa-dribbble",
                "icon4"=>"fa fa-pinterest",
                "lien1"=>"https://www.facebook.com/",
                "lien2"=>"https://twitter.com/",
                "lien3"=>"https://dribbble.com/",
                "lien4"=>"https://www.pinterest.com/",
                "user_id"=>3,
            ],
        ]);
    }
}
}
