<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'João Autor',
            'email' => 'autor@email.com',
            'password' => Hash::make('12345678'),
            'role' => User::ROLE_AUTOR,
        ]);

        User::create([
            'name' => 'Maria Leitora',
            'email' => 'leitor@email.com',
            'password' => Hash::make('12345678'),
            'role' => User::ROLE_LEITOR,
        ]);
    }
}