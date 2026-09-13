<?php

namespace Database\Seeders;

use App\Models\Tema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tema::create([
            'nome'=> 'Romance'
        ]);
        Tema::create([
            'nome'=> 'Terror'
        ]);
        Tema::create([
            'nome'=> 'Wuxia'
        ]);
        Tema::create([
            'nome'=> 'Dark Romance'
        ]);
        Tema::create([
            'nome'=> 'Lovecraft'
        ]);
        Tema::create([
            'nome'=> 'Ficção Cientifica'
        ]);
        Tema::create([
            'nome'=> 'Comédia'
        ]);
        Tema::create([
            'nome'=> 'Comédia Romantica'
        ]);
        Tema::create([
            'nome'=> 'Suspense'
        ]);
        Tema::create([
            'nome'=> 'Criminosa'
        ]);
        Tema::create([
            'nome'=> 'Investigativo'
        ]);
        Tema::create([
            'nome'=> 'Adulto'
        ]);
    }
}
