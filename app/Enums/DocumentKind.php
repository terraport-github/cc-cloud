<?php

namespace App\Enums;

/**
 * 資料種別
 */
enum DocumentKind: string
{
    case SchoolURL = 'schoolURL';
    case Schedule = 'schedule';
    case Maintenance = 'maintenance';
    case TP = 'tp';
    case guest = 'guest';

    // タブの数
    public function tab(): int
    {
        return match ($this) {
            self::SchoolURL => 2,
            default => 1,
        };
    }

    public function label(): string
    {
        return match ($this) {
            self::SchoolURL => '検収・本番URL',
            self::Schedule => 'スケジュール',
            self::Maintenance => 'メンテナンス情報',
            self::TP => '○○資料１',
            self::guest => '○○資料２',
        };
    }
}

/*
    検収・本番URL
    スケジュール
    メンテナンス情報
    マニュアル

 */