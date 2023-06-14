<?php

namespace App\Enums;

/**
 * ユーザー権限
 */
enum PermissionKind: string
{
    case Admin = 'admin';
    case D = 'd';
    case TP = 'tp';
    case Guest = 'guest';

    public function label(): string
    {
        return match ($this) {
            self::Admin => '管理者',
            self::D => 'ディレクター',
            self::TP => '社内',
            self::Guest => '外部',
        };
    }

    public function level(): int
    {
        return match ($this) {
            self::Admin => 1,
            self::D => 2,
            self::TP => 3,
            self::Guest => 4,
        };
    }
}
