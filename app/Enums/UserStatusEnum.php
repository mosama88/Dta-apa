<?php

namespace App\Enums;

enum UserStatusEnum: int
{
    case Active = 1;
    case Inactive = 2;


    public function label(): string
    {
        return match ($this) {
            self::Active => 'Active',
            self::Inactive => 'Inactive',
        };
    }
}
