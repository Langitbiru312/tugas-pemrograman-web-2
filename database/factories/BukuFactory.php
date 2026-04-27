<?php

namespace Database\Factories;

use App\Models\Buku;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_buku' => fake()->name(),
            'judul_buku' => fake()->name(),
            'penulis' => fake()->name(),
            'penerbit' => fake()->name(),
            'Tahun_terbit' => fake()->numerify('####'),
            
        ];
    }
}
