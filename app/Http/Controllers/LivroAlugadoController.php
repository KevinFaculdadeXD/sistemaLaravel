<?php

namespace App\Http\Controllers;

use App\Models\LivroAlugado;

class LivroAlugadoController extends Controller
{
    public function index()
    {
        $alugueis = LivroAlugado::all();

        return view('alugueis.index', compact('alugueis'));
    }
}