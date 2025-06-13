<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'ite@gmail.com',
            'password' => Hash::make('educabol13'), // Cambia '12345678' por tu contraseña preferida
            'email_verified_at' => now(),
        ]);
    }
}
