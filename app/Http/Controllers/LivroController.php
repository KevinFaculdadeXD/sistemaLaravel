<?php

namespace App\Http\Controllers;

use App\Http\Requests\LivroRequest;
use App\Models\Livro;
use App\Models\Tema;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::all();

        return view('livros.index', compact('livros'));
    }

    public function create()
    {
        Gate::authorize('create', Livro::class);
        $tema = Tema::all();
        return view('livros.create', compact('tema'));
    }

    public function store(LivroRequest $request){

        $dados = $request->validated();

        $livro = new Livro($dados);

        $livro->user_id = Auth::id();

        $livro -> save();
        
        return redirect()->route('livros.meus_livros')
        ->with('success', 'Livro Criado');
    }

    public function show(Livro $livro){
        return view('livros.show', compact('livro'));
    }
    
    public function edit(Livro $livro){
    Gate::authorize('update', $livro);
    $tema = Tema::all();
    return view('livros.edit', compact('livro', 'tema'));
}

    public function update(LivroRequest $request, Livro $livro)
    {
        Gate::authorize('update', $livro);
        $dados = $request->validated();
        $livro->update($dados);
        return redirect()->route('livros.meus_livros')
            ->with('success', 'Livro Alterado');
    }

    public function destroy(Livro $livro)
    {
        Gate::authorize('delete', $livro);
        $livro->delete();
        return redirect()->route('livros.meus_livros')
            ->with('success', 'Livro Deletado');
    }

    public function meusLivros()
    {
        $livros = Livro::where('user_id', Auth::id())->get();

        return view('livros.meus_livros', compact('livros'));
    }
}