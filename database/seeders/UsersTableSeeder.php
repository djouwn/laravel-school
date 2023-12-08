<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// database/seeders/UsersTableSeeder.php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Clear existing records to start fresh
        DB::table('users')->truncate();

        // Seed the users table with sample data
        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => Hash::make('john@example.com'),
                'is_seller' => 1, // Adjust based on your is_seller column type and values
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more user data as needed
        ]);
        DB::table('users')->insert([
            [
                'name' => 'Doe',
                'email' => 'Dodo@example.com',
                'password' => Hash::make('Dodo@example.com'),
                'is_admin' => 1, // Adjust based on your is_seller column type and values
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more user data as needed
        ]);
    }
}

