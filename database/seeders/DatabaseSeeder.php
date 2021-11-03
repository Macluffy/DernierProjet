<?php

namespace Database\Seeders;

use App\Http\Controllers\NavbarController;
use App\Models\Coach;
use App\Models\Inscription;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
        $this->call([
            
            RoleSeeder::class,
            NavbarSeeder::class,
            SliderSeeder::class,
            TitreSeeder::class,
            AboutSeeder::class,
            GenreSeeder::class,
            HorraireSeeder::class,
            DateSeeder::class,
            JourSeeder::class,
            ClasseSeeder::class,
            InscriptionSeeder::class,
            GallerySeeder::class,
            ScheduleSeeder::class,
            UserSeeder::class,
            TrainerSeeder::class,
            EventSeeder::class,
            PricingSeeder::class,
            ClientSeeder::class,
            MapSeeder::class,
            NewslaterSeeder::class,
            FooterSeeder::class,
            
            
            
        ]);
    // \App\Models\User::factory(10)->create();

    $this->call([
            
        CoachSeeder::class

    ]);
    
    }
}
