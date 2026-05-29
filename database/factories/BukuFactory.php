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
     *  mixed>
     */
   public function definition(): array
{
    return [

        'id_buku' => fake()->unique()->numberBetween(1000,9999),

        'judul_buku' => fake()->randomElement([
            'Laskar Pelangi',
            'Bumi',
            'Mariposa',
            'Antariksa'
        ]),

        'penulis' => fake()->name(),

        'penerbit' => fake()->company(),

        'tanggal_terbit' => fake()->date(),

        'kategori_id' => \App\Models\Kategori::inRandomOrder()->first()->id,

        'supplier_id' => \App\Models\Supplier::inRandomOrder()->first()->id,

    ];
}
}
