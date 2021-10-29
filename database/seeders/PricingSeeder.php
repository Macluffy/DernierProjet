<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        { DB::table("pricings")->insert([
            [
                "pack"=>"silver package",
                "prix"=> "$30",
                "month"=>"/month",
                "li1"=>"Free T-Shirt & swags",
                "li2"=>"Free of all message treatments",
                "li3"=>"Access Clup Facilites",
                "li4"=>"Out Door activites",
                "btn"=>"get started",
            ],
            [
                "pack"=>"gold package",
                "prix"=> "$50",
                "month"=>"/month",
                "li1"=>"Free T-Shirt & swags",
                "li2"=>"Free of all message treatments",
                "li3"=>"Access Clup Facilites",
                "li4"=>"Out Door activites",
                "btn"=>"get started",
            ],
            [
                "pack"=>"platinium package",
                "prix"=> "$70",
                "month"=>"/month",
                "li1"=>"Free T-Shirt & swags",
                "li2"=>"Free of all message treatments",
                "li3"=>"Access Clup Facilites",
                "li4"=>"Out Door activites",
                "btn"=>"get started",
            ],
        ]);
    }
}
}