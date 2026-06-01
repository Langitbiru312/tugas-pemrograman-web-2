<?php

namespace Database\Seeders;

use App\Models\Supplier;
use App\Models\Kategori;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 30; $i++) {

            Supplier::create([

                'nama_supplier' => fake()->company(),

                'alamat' => fake()->address(),

                'telepon' => fake()->phoneNumber(),

                'kategori_id' => Kategori::inRandomOrder()->first()->id,

            ]);

        }
    }
}