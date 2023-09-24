<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Panduan;
use App\Models\TeamTutor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            SliderBannerSeeder::class,
            TeamTutorSeeder::class,
            PanduanSeeder::class,
            JadwalSeeder::class,
            TestimoniSeeder::class,
        ]);
    }
}
