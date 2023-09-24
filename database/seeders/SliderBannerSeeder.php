<?php

namespace Database\Seeders;

use App\Models\SliderBanner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name'           => 'Sample Banner',
            'url'            => '#',
            'banner_desktop' => 'sample_desktop.jpg',
            'banner_mobile'  => 'sample_mobile.jpg',
        ];

        SliderBanner::create($data);
    }
}
