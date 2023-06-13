<?php

namespace App\Enums;

/**
 * 資料種別
 */
enum DocumentKind: string
{
    case SchoolURL = 'schoolURL';
    case Schedule = 'schedule';
    case TP = 'tp';
    case guest = 'guest';

    public function label(): string
    {
        return match ($this) {
            self::SchoolURL => '検収・本番URL',
            self::Schedule => 'スケジュール',
            self::TP => '社内',
            self::guest => '外部',
        };
    }
}

/*
    検収・本番URL
    スケジュール
    メンテナンス情報
    マニュアル

 */