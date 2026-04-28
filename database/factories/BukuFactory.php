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
            'id_buku' =>  fake()->numerify('####'),
            'judul_buku' => fake()->randomElement(['Alvaska','Hilmy milan','Halemorra','im not antagonis',
            'Sagala','Alan','Mariposa','Antariksa','juandara','Melodylan','Ruang hati']),
            'penulis' => fake()->name(),
            'penerbit' => fake()->randomElement(['Bukune','Akad','Loveble','Coconut books','Republik']),
            'tanggal_terbit' => fake()->dateTimeBetween()
        
        ];
    }
}
