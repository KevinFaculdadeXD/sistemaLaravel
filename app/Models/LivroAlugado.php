<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivroAlugado extends Model
{
    use HasFactory;

    protected $table = 'livros_alugados';

    protected $fillable = [
        'user_id',
        'livro_id',
        'data_aluguel',
        'data_devolucao',
    ];

    // O aluguel pertence a um usuário (leitor)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // O aluguel pertence a um livro
    public function livro()
    {
        return $this->belongsTo(Livro::class);
    }
}