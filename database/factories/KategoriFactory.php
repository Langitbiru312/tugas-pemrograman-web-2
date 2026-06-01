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
                'Teknologi',
                'Pendidikan',
                'Sejarah'
            ]),

            'kode_kategori' => fake()->unique()->numerify('KTG###'),

            'deskripsi' => fake()->sentence(),
        ];
    }
}