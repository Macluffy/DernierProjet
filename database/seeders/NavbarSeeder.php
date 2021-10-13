<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("navbars")->insert([
            [
                "logo"=>"img/logo/logo.png",
                "link1"=>"Home",
                "link2"=>"About",
                "link3"=>"classes",
                "link4"=>"gallery",
                "link5"=>"Contact",
                
            ]
        ]);
    }
}
