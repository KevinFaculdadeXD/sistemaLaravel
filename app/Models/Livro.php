<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'data_publicacao',
        'descricao',
        'quantidade_estoque',
        'autor',
        'tema_id',
    ];

    // lIgação entre o tema e o livro sendo tema 1 - N  Livro
    public function tema() : BelongsTo
    {
        return $this->belongsTo(Tema::class, 'tema_id');
    }

    // Um livro pode aparecer em vários registros de aluguel
    public function alugueis() : HasMany
    {
        return $this->hasMany(LivroAlugado::class, 'livro_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}