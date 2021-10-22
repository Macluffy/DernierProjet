<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("inscriptions")->insert([
            [
                
                "classe_id"=>1,

            ],
            [
                
                "classe_id"=>2,

            ],
            [
                
                "classe_id"=>1,

            ],
            [
                
                "classe_id"=>1,

            ],
            [
                
                "classe_id"=>3,

            ],
            [
                
                "classe_id"=>2,

            ],
            [
                
                "classe_id"=>2,

            ],
            [
                
                "classe_id"=>3,

            ],
            [
                
                "classe_id"=>1,

            ],
            [
                
                "classe_id"=>1,

            ],
        ]);
    }
}
