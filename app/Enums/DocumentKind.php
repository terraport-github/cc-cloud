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
    case Application = 'application';
    case Price = 'price';
    case Quote = 'quote';

    public function label(): string
    {
        return match ($this) {
            self::SchoolURL => '検収・本番URL',
            self::Schedule => 'スケジュール',
            self::Maintenance => 'メンテナンス情報',
            self::Application => '出願確認',
            self::Price => '金額管理',
            self::Quote => '見積請求',
        };
    }

    // タブの数
    public function tab(): int
    {
        return match ($this) {
            self::SchoolURL => 2,
            default => 1,
        };
    }
}

/*
    検収・本番URL
    スケジュール
    メンテナンス情報
    マニュアル

 */