<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat user dengan data tetap (bisa digunakan untuk login/testing)
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Jalankan seeder untuk produk (pastikan file ProductSeeder sudah ada)
        $this->call([
            ProductSeeder::class,
        ]);
    }
}
