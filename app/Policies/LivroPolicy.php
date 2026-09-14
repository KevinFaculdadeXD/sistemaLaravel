<?php

namespace App\Policies;

use App\Enums\UserRole;
use App\Models\Livro;
use App\Models\User;

class LivroPolicy
{
    public function view(User $user, Livro $livro): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return $user->role === UserRole::AUTOR;
    }

    public function update(User $user, Livro $livro): bool
    {
        return $user->role === UserRole::AUTOR
            && $user->id === $livro->user_id;
    }

    public function delete(User $user, Livro $livro): bool
    {
        return $user->role === UserRole::AUTOR
            && $user->id === $livro->user_id;
    }
}
