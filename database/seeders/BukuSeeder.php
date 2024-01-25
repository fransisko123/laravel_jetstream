<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buku::create([
            'judul' => 'Judul Buku 1',
            'pengarang' => 'Pengarang 1',
            'sinopsis' => 'Sinopsis buku yang pertama.',
            'tahun_terbit' => 2020,
            'harga' => 29.99,
        ]);

        Buku::create([
            'judul' => 'Judul Buku 2',
            'pengarang' => 'Pengarang 2',
            'sinopsis' => 'Sinopsis buku yang kedua.',
            'tahun_terbit' => 2021,
            'harga' => 39.99,
        ]);
    }
}
