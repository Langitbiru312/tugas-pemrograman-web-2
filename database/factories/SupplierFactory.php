<?php

namespace Database\Factories;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama_supplier' => fake()->company(),

            'alamat' => fake()->address(),

            'telepon' => fake()->phoneNumber(),

            'email' => fake()->companyEmail(),

            'kategori_id' => Kategori::factory(),
        ];
    }
}