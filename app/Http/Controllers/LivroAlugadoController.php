<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use App\Models\LivroAlugado;

class LivroAlugadoController extends Controller
{
    public function index()
    {
        $alugueis = LivroAlugado::all();

        return view('alugueis.index', compact('alugueis'));
    }

    public function store(Livro $livro)
    {
        if ($livro->quantidade_estoque <= 0) {
            return back()->with('error', 'Livro sem estoque.');
        }

        $aluguelExistente = LivroAlugado::where('user_id', auth()->id())
            ->where('livro_id', $livro->id)
            ->whereNull('data_devolucao')
            ->exists();

        if ($aluguelExistente) {
            return redirect()->route('livros.meus_alugueis')
            ->with('success', 'Livro alugado com sucesso!');
        }

        LivroAlugado::create([
            'user_id' => auth()->id(),
            'livro_id' => $livro->id,
            'data_aluguel' => now()->toDateString(),
        ]);

        $livro->decrement('quantidade_estoque');

        return redirect()->route('livros.meus_alugueis')
        ->with('success', 'Livro alugado com sucesso!');
    }

            public function meusAlugueis()
        {
            $alugueis = LivroAlugado::where('user_id', auth()->id())
                ->whereNull('data_devolucao')
                ->with('livro')
                ->get();

            return view('livros.meus_alugueis', compact('alugueis'));
        }

        public function devolver(LivroAlugado $aluguel)
        {
            if ($aluguel->user_id !== auth()->id()) {
                abort(403);
            }

            if ($aluguel->data_devolucao !== null) {
                return back()->with('error', 'Este livro já foi devolvido.');
            }

            $aluguel->update([
                'data_devolucao' => now()->toDateString(),
            ]);

            $aluguel->livro->increment('quantidade_estoque');

            return back()->with('success', 'Livro devolvido com sucesso!');
        }
}