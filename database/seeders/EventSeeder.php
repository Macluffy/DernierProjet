<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        { DB::table("events")->insert([
            [
                "titre"=>"Yoga celebration in Handstand",
                "paragraphe"=> "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'ssurvived",
                "date"=>"25 March 2016",
                "heure"=>"10AM - 12AM",
                "order"=>false
            ],
            [
                "titre"=>"Ali le looser",
                "paragraphe"=> "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'ssurvived",
                "date"=>"25 March 2016",
                "heure"=>"10AM - 12AM",
                "order"=>false
            ],
            [
                "titre"=>"Ali le king",
                "paragraphe"=> "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'ssurvived",
                "date"=>"25 March 2016",
                "heure"=>"10AM - 12AM",
                "order"=>true
            ],
        ]);
    }
}
}