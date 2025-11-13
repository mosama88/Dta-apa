<?php

namespace App\Enums;

enum TypeLineEnum: int
{
    case Internet = 1;
    case VPN = 2;

    public function label(): string
    {
        return match ($this) {
            self::Internet => 'IP Transit Over Fiber',
            self::VPN => 'VPN Over Fiber',
        };
    }
}
