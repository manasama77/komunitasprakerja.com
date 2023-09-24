<?php

namespace Database\Seeders;

use App\Models\Testimoni;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'       => 'Testi 1',
                'photo'      => 'testimoni1.jpg',
                'testimoni'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae a explicabo eum laudantium deserunt asperiores vel facilis quaerat quae quibusdam?',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name'       => 'Testi 2',
                'photo'      => 'testimoni2.jpg',
                'testimoni'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae a explicabo eum laudantium deserunt asperiores vel facilis quaerat quae quibusdam?',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name'       => 'Testi 3',
                'photo'      => 'testimoni3.jpg',
                'testimoni'  => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae a explicabo eum laudantium deserunt asperiores vel facilis quaerat quae quibusdam?',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        ];

        Testimoni::insert($data);
    }
}
