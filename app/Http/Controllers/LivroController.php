<?php

namespace App\Http\Controllers;

use App\Http\Requests\LivroRequest;
use App\Models\Livro;
use App\Models\Tema;
use Illuminate\Auth\Events\Validated;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::all();

        return view('livros.index', compact('livros'));
    }

    public function create()
    {
        $tema = Tema::all();
        return view(('livros.create') , compact('tema'));
    }

    public function store(LivroRequest $request){

        $dados = $request->validated();

        $livro = new Livro($dados);

        $livro->user_id = auth()->id();

        $livro -> save();
        
        return redirect()->route('livros.meus_livros')
        ->with('success', 'Livro Criado');
    }

    public function show(Livro $livro){
        return view('livros.show', compact('livro'));
    }
    
    public function edit(Livro $livro){
        $tema = Tema::all();
        return view('livros.edit', compact('livro','tema'));
    }

    public function update(LivroRequest $request, Livro $livro)
    {

        $dados = $request->validated();

        $livro->update($dados);

        return redirect()->route('livros.meus_livros')
        ->with('success', 'Livro Alterado');

    }

    public function destroy(Livro $livro){

        $livro->delete();
        return redirect()->route('livros.meus_livros')
        ->with('success', 'Livro Deletado');
    }

    public function meusLivros()
    {
        $livros = Livro::where('user_id', auth()->id())->get();

        return view('livros.meus_livros', compact('livros'));
    }
}