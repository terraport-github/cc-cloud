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
    case guest = 'guest';

    public function label(): string
    {
        return match ($this) {
            self::Admin => '管理者',
            self::D => 'ディレクター',
            self::TP => '社内',
            self::guest => '外部',
        };
    }
}
