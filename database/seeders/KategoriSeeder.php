<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        Kategori::create([
            'nama_kategori' => 'Pendidikan',
            'kode_kategori' => 'PDD',
            'deskripsi' => 'Kategori buku pendidikan'
        ]);

        Kategori::create([
            'nama_kategori' => 'Komik',
            'kode_kategori' => 'KMK',
            'deskripsi' => 'Kategori buku komik'
        ]);

        Kategori::create([
            'nama_kategori' => 'Teknologi',
            'kode_kategori' => 'TKN',
            'deskripsi' => 'Kategori buku teknologi'
        ]);

        Kategori::create([
            'nama_kategori' => 'Agama',
            'kode_kategori' => 'AGM',
            'deskripsi' => 'Kategori buku agama'
        ]);
    }
}