<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
   
    public function run(): void
    {
        $kategoris = [
            'Makanan',
            'Minuman',
            'Dessert',
        ];

        foreach ($kategoris as $nama) {
            Kategori::create([
                'nama_kategori' => $nama,
            ]);
        }
    }
}
