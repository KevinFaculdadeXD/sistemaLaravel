<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LivroAlugadoController;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::resource('/livros', LivroController::class);

    Route::get('/meus-livros', [LivroController::class, 'meusLivros'])
        ->name('livros.meus_livros');

    Route::post('/livros/{livro}/alugar', [LivroAlugadoController::class, 'store'])
        ->name('livros.alugar');

    Route::get('/meus-alugueis', [LivroAlugadoController::class, 'meusAlugueis'])
    ->name('livros.meus_alugueis');

    Route::post('/alugueis/{aluguel}/devolver', [LivroAlugadoController::class, 'devolver'])
        ->name('alugueis.devolver');
});


Route::get('/livros', [LivroController::class, 'index'])->name('livros.index');
Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios.index');
Route::get('/alugueis', [LivroAlugadoController::class, 'index'])->name('alugueis.index');
Route::get('/usuarios/login', [UserController::class, 'login'])->name('usuarios.login');
Route::post('/usuarios/login', [UserController::class, 'authenticate'])->name('usuarios.authenticate');


require __DIR__.'/auth.php';
