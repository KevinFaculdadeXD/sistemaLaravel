<?php

namespace App\Enums;

enum UserRole: string
{
    case AUTOR = 'autor';
    case LEITOR = 'leitor';
    public function label(): string{

        return match($this){
            self::AUTOR => 'Autor',
            self::LEITOR => 'Leitor',
        };
    }
}
