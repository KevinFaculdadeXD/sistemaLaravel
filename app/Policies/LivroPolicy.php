<?php

namespace App\Policies;

use App\Enums\UserRole;
use App\Models\Livro;
use App\Models\User;

class LivroPolicy
{
    public function view(){
        return true;
    }

    public function create($user){
        return $user->role === UserRole::AUTOR;
    }

    public function update($user, Livro $livro): bool {
        return $user->role === UserRole::AUTOR && $user->id === $livro->user_id;
    }

    public function delete($user, Livro $livro): bool {
        return $user->role === UserRole::AUTOR && $user->id === $livro->user_id;
    }
}
