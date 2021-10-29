<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            [
                "name"=>"ali",
                "email"=> "ahriga.a@hotmail.com",
                "password"=>"popopopo",
                "role_id"=>"1",
                "abo"=>"platinium"
            ],
            [
                "name"=>"test",
                "email"=> "test@hotmail.com",
                "password"=>"popopopo",
                "role_id"=>"2",
                "abo"=>"platinium"
            ],
            [
                "name"=>"celine",
                "email"=> "celine@hotmail.com",
                "password"=>"popopopo",
                "role_id"=>"3",
                "abo"=>"gold"
            ],
            
        ]);
    }
}
