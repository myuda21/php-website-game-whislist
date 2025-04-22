<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Game::create([
            'nama' => 'Elden Ring',
            'harga' => 750000,
            'gambar' => 'eldenring.jpg',
            'deskripsi' => 'Game action RPG open-world dari FromSoftware.'
        ]);

        Game::create([
            'nama' => 'GTA V',
            'harga' => 300000,
            'gambar' => 'gtav.jpg',
            'deskripsi' => 'Game dunia terbuka dari Rockstar Games.'
        ]);

        Game::create([
            'nama' => 'Counter Strike 2',
            'harga' => 0,
            'gambar' => 'CS2.jpg',
            'deskripsi' => 'Game dunia terbuka dari Rockstar Games.'
        ]);

        Game::create([
            'nama' => 'Valorant',
            'harga' => 0,
            'gambar' => 'valorant.jpg',
            'deskripsi' => 'Game dunia terbuka dari Rockstar Games.'
        ]);
    }
}
