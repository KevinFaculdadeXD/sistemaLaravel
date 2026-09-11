<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    const ROLE_AUTOR = 'autor';
    const ROLE_LEITOR = 'leitor';
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];
    protected $hidden = [
        'password',
    ];

    // Um autor possui vários livros
    public function livros()
    {
        return $this->hasMany(Livro::class, 'autor_id');
    }

    // Um leitor realiza vários aluguéis
    public function livrosAlugados()
    {
        return $this->hasMany(LivroAlugado::class, 'user_id');
    }
}