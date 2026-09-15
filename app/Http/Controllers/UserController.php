<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function index()
    {
        Gate::authorize('viewAny', User::class);

        $usuarios = User::paginate(15);

        return view('usuarios.index', compact('usuarios'));
    }
}