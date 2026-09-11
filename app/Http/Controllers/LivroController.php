<?php

namespace App\Http\Controllers;

use App\Models\Livro;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::with('autor')->get();

        return view('livros.index', compact('livros'));
    }
}
