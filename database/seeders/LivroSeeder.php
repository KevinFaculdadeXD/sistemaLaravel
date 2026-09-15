<?php

namespace Database\Seeders;

use App\Models\Livro;
use App\Models\Tema;
use App\Models\User;
use Illuminate\Database\Seeder;

class LivroSeeder extends Seeder
{
    /**
     * Cadastra alguns livros de exemplo, todos pertencentes ao
     * usuário autor criado pelo UserSeeder.
     */
    public function run(): void
    {
        $autor = User::where('email', 'autor@email.com')->first();

        if (! $autor) {
            $this->command->warn('UserSeeder precisa rodar antes do LivroSeeder.');
            return;
        }

        $temaPorNome = Tema::pluck('id', 'nome');

        $livros = [
            [
                'titulo' => 'A Super Aura',
                'data_publicacao' => '1967-06-07',
                'descricao' => 'Como ter a super aura',
                'quantidade_estoque' => 67,
                'autor' => 'Kevin',
                'tema' => 'Adulto',
            ],
            [
                'titulo' => 'O Chamado de Cthulhu',
                'data_publicacao' => '1928-02-01',
                'descricao' => 'Fragmentos de investigações revelam a existência de um deus adormecido nas profundezas do oceano.',
                'quantidade_estoque' => 3,
                'autor' => 'H. P. Lovecraft',
                'tema' => 'Lovecraft',
            ],
            [
                'titulo' => 'Corações Solitários',
                'data_publicacao' => '2019-06-15',
                'descricao' => 'Dois estranhos se reencontram anos depois em circunstâncias inesperadas.',
                'quantidade_estoque' => 8,
                'autor' => 'Marina Costa',
                'tema' => 'Romance',
            ],
            [
                'titulo' => 'O Último Refúgio',
                'data_publicacao' => '2021-11-03',
                'descricao' => 'Uma jornada de sobrevivência num futuro pós-apocalíptico dominado por máquinas.',
                'quantidade_estoque' => 6,
                'autor' => 'Rafael Nunes',
                'tema' => 'Ficção Cientifica',
            ],
            [
                'titulo' => 'A Vila do Silêncio',
                'data_publicacao' => '2018-09-20',
                'descricao' => 'Um detetive tenta desvendar uma série de desaparecimentos numa vila isolada.',
                'quantidade_estoque' => 4,
                'autor' => 'João Autor',
                'tema' => 'Suspense',
            ],
            [
                'titulo' => 'Risadas na Tempestade',
                'data_publicacao' => '2022-03-08',
                'descricao' => 'Uma comédia de erros durante uma viagem de família que sai completamente do controle.',
                'quantidade_estoque' => 10,
                'autor' => 'João Autor',
                'tema' => 'Comédia',
            ],
        ];

        foreach ($livros as $dados) {
            $tema = $temaPorNome[$dados['tema']] ?? null;

            if (! $tema) {
                $this->command->warn("Tema '{$dados['tema']}' não encontrado, pulando '{$dados['titulo']}'.");
                continue;
            }

            $livro = new Livro([
                'titulo' => $dados['titulo'],
                'data_publicacao' => $dados['data_publicacao'],
                'descricao' => $dados['descricao'],
                'quantidade_estoque' => $dados['quantidade_estoque'],
                'autor' => $dados['autor'],
                'tema_id' => $tema,
            ]);

            $livro->user_id = $autor->id;
            $livro->save();
        }
    }
}