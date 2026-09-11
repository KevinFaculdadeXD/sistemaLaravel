<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'data_publicacao',
        'descricao',
        'quantidade_estoque',
        'autor_id',
    ];

    // O livro pertence a um autor (users.role = 'autor')
    public function autor()
    {
        return $this->belongsTo(User::class, 'autor_id');
    }

    // Um livro pode aparecer em vários registros de aluguel
    public function alugueis()
    {
        return $this->hasMany(LivroAlugado::class, 'livro_id');
    }
}