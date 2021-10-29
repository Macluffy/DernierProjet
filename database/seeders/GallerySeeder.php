<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("galleries")->insert([
        [
            "img1"=>"gal.jpg",
            "img2"=> "gal.jpg",
            "icon"=>"zmdi zmdi-zoom-in",
        ],
        [
            "img1"=>"gal2.jpg",
            "img2"=> "gal2.jpg",
            "icon"=>"zmdi zmdi-zoom-in",
        ],
        [
            "img1"=>"gal3.jpg",
            "img2"=> "gal3.jpg",
            "icon"=>"zmdi zmdi-zoom-in",
        ],
        [
            "img1"=>"gal4.jpg",
            "img2"=> "gal4.jpg",
            "icon"=>"zmdi zmdi-zoom-in",
        ],
        [
            "img1"=>"gal5.jpg",
            "img2"=> "gal5.jpg",
            "icon"=>"zmdi zmdi-zoom-in",
        ],
        [
            "img1"=>"gal6.jpg",
            "img2"=> "gal6.jpg",
            "icon"=>"zmdi zmdi-zoom-in",
        ],
    ]);
    }
}
