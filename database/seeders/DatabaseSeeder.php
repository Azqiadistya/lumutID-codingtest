<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Membuat pengguna admin dummy
        User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
            'role' => 'admin', // Sesuaikan dengan role yang dibutuhkan
        ]);

        // Membuat pengguna author dummy
        User::create([
            'name' => 'author',
            'email' => 'author@example.com',
            'password' => Hash::make('author'),
            'role' => 'author', // Sesuaikan dengan role yang dibutuhkan
        ]);

        // Panggil seeder lain jika diperlukan
        // $this->call(OtherSeeder::class);
    }
}
