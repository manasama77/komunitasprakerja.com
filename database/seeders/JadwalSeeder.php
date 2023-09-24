<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'title'       => 'Pertemuan 1',
            'address'     => 'Alamat 1',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit mollitia nihil consequuntur nobis quisquam accusamus facere ullam eos accusantium autem esse, non, in delectus adipisci possimus minima omnis perferendis distinctio, fugiat minus voluptas! Tempore eius qui perferendis earum blanditiis officia tempora soluta dicta mollitia ad cum vero, explicabo quisquam nisi doloribus architecto molestias quam facere obcaecati ex quis a. Asperiores, exercitationem nemo? Dolor natus eius ipsa blanditiis, nobis deserunt officia eos, officiis culpa repudiandae iste. Optio fugit molestias culpa a, qui, sequi quo illum dolor autem mollitia repellendus atque maxime quidem sapiente perspiciatis nobis voluptatum aut architecto minus beatae sint!',
            'dt_jadwal'   => '2023-09-20 17:00:00'
        ];

        Jadwal::create($data);
    }
}
