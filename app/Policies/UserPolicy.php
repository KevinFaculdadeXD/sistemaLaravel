<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy{
    public function viewAny(User $user): bool{
        return $user->role === 'autor';
    }

    public function view(User $user, User $usuario): bool{
        return $user->role === 'autor';
    }

    public function create(User $user): bool{
        return $user->role === 'autor';
    }

    public function update(User $user, User $usuario): bool{
        return $user->role === 'autor';
    }

    public function delete(User $user, User $usuario): bool{
        return $user->role === 'autor';
    }
}