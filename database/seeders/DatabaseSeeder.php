<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('12345678')
        ]);
        
        User::create([
            'name' => 'kingking User',
            'email' => 'king@example.com',
            'password' => Hash::make('12345678')
        ]);
    }
}