<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KategoriFactory extends Factory
{
    public function definition(): array
    {
        return [

            'nama_kategori' => fake()->randomElement([
                'Novel',
                'Komik',
                'Pendidikan',
                'Sejarah'
            ]),

            'deskripsi' => fake()->sentence(),

            'kode_kategori' => fake()->unique()->numberBetween(100,999)

        ];
    }
}