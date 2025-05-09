<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::firstOrCreate([
            'email' => 'admin@laravel.test',
        ], [
            'name' => 'Admin',
            'password' => Hash::make('secret'),
            'role' => 'admin',
        ]);

        $this->call([
            AnimalSeeder::class,
        ]);
    }
}
