<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivroAlugado extends Model
{
    use HasFactory;

    protected $table = 'livros_alugados'; // necessário porque o nome não segue o plural padrão do Eloquent

    protected $fillable = [
        'user_id',
        'livro_id',
        'data_aluguel',
        'data_devolucao',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function livro()
    {
        return $this->belongsTo(Livro::class);
    }
}