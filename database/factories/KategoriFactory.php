<?php

namespace Database\Factories;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

class KategoriFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama_kategori' => fake()->randomElement([
                'Teknologi',
                'Pendidikan',
                'Sejarah',
                'Komik',
                'Agama'
            ]),

            'kode_kategori' => 'KTG' . fake()->numberBetween(100, 999),

            'deskripsi' => fake()->randomElement([
                'Kategori buku tentang teknologi dan komputer',
                'Kategori buku untuk pendidikan dan pembelajaran',
                'Kategori buku sejarah Indonesia dan dunia',
                'Kategori buku komik dan hiburan',
                'Kategori buku keagamaan dan spiritual'
            ]),
        ];
    }
}