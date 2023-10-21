<?php

namespace Database\Seeders;

use App\Models\mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            $data = [
                'namakategori' => $faker->name,
                'deskripsi' => $faker->text
            ];
            mahasiswa::create($data);
        }
    }
}
