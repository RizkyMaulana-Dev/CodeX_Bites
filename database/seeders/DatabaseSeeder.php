<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\User; // <-- PASTIKAN BARIS INI ADA DI SINI
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $dataMenu = [
            [
                'nama' => 'Har Gow (Shrimp Dumpling)',
                'harga' => 22000,
                'stock' => 40,
                'rating' => 4.8,
                'jumlah_terjual' => 150,
            ],
            [
                'nama' => 'Siu Mai (Pork & Shrimp)',
                'harga' => 20000,
                'stock' => 35,
                'rating' => 4.7,
                'jumlah_terjual' => 200,
            ],
            [
                'nama' => 'Xiao Long Bao (Soup Dumpling)',
                'harga' => 25000,
                'stock' => 30,
                'rating' => 4.9,
                'jumlah_terjual' => 180,
            ],
            [
                'nama' => 'Char Siu Bao (BBQ Pork Bun)',
                'harga' => 18000,
                'stock' => 50,
                'rating' => 4.6,
                'jumlah_terjual' => 220,
            ],
            [
                'nama' => 'Hakau (Crystal Shrimp Dumpling)',
                'harga' => 23000,
                'stock' => 25,
                'rating' => 4.8,
                'jumlah_terjual' => 170,
            ],
            [
                'nama' => 'Lumpia Kulit Tahu (Tofu Skin Roll)',
                'harga' => 16000,
                'stock' => 45,
                'rating' => 4.5,
                'jumlah_terjual' => 130,
            ],
            [
                'nama' => 'Ceker Ayam Tauco (Chicken Feet)',
                'harga' => 21000,
                'stock' => 20,
                'rating' => 4.4,
                'jumlah_terjual' => 90,
            ],
            [
                'nama' => 'Bakpao Telur Asin (Salted Egg Bun)',
                'harga' => 19000,
                'stock' => 38,
                'rating' => 4.7,
                'jumlah_terjual' => 160,
            ],
            [
                'nama' => 'Cheong Fun (Rice Noodle Roll)',
                'harga' => 17000,
                'stock' => 32,
                'rating' => 4.5,
                'jumlah_terjual' => 110,
            ],
            [
                'nama' => 'Dimsum Vegetarian (Jamur & Sayur)',
                'harga' => 15000,
                'stock' => 55,
                'rating' => 4.6,
                'jumlah_terjual' => 140,
            ],
        ];
        // Looping untuk memasukkan semua data ke dalam database
        foreach ($dataMenu as $menu) {
            Menu::create($menu);
        }
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'test123',
        ]);
    }
}
