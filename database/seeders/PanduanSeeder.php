<?php

namespace Database\Seeders;

use App\Models\Panduan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PanduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Panduan::factory(2)->create();
    }
}
