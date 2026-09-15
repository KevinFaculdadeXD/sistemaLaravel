<?php

namespace Database\Seeders;

use App\Models\Livro;
use App\Models\LivroAlugado;
use App\Models\User;
use Illuminate\Database\Seeder;

class LivroAlugadoSeeder extends Seeder
{
    /**
     * Cria um histórico de aluguel de exemplo para o usuário leitor:
     * um livro já devolvido e outro ainda em posse dele.
     */
    public function run(): void
    {
        $leitor = User::where('email', 'leitor@email.com')->first();
        $livros = Livro::orderBy('id')->take(2)->get();

        if (! $leitor || $livros->count() < 2) {
            $this->command->warn('UserSeeder e LivroSeeder precisam rodar antes do LivroAlugadoSeeder.');
            return;
        }

        // Aluguel já devolvido
        LivroAlugado::create([
            'user_id' => $leitor->id,
            'livro_id' => $livros[0]->id,
            'data_aluguel' => now()->subDays(20)->toDateString(),
            'data_devolucao' => now()->subDays(13)->toDateString(),
        ]);

        // Aluguel em aberto (ainda não devolvido)
        LivroAlugado::create([
            'user_id' => $leitor->id,
            'livro_id' => $livros[1]->id,
            'data_aluguel' => now()->subDays(3)->toDateString(),
            'data_devolucao' => null,
        ]);

        $livros[1]->decrement('quantidade_estoque');
    }
}