<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            ['name' => 'Super Admin', 'password' => 'password', 'role' => 'Super Admin']
        );

        User::updateOrCreate(
            ['email' => 'pelanggan@example.com'],
            ['name' => 'Pelanggan', 'password' => 'password', 'role' => 'Pelanggan']
        );

        User::updateOrCreate(
            ['email' => 'mitra@example.com'],
            ['name' => 'Mitra', 'password' => 'password', 'role' => 'Mitra']
        );
    }
}
