<?php

namespace App\Enums;

enum ProjectStatusEnum: string
{
    case Pending = 'Pending';
    case Progress = 'Progress';
    case Finished = 'Finished';

    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }
}
