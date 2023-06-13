<?php

namespace Database\Seeders;

use App\Enums\DocumentKind;
use App\Models\Document;
use App\Models\School;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        School::updateOrInsert(['id' => 1], ['school_name' => '帝塚山 中学校高等学校']);
        School::updateOrInsert(['id' => 2], ['school_name' => '百合学院中学校・高等学校']);
        School::updateOrInsert(['id' => 3], ['school_name' => '大阪女学院中学校']);
        School::updateOrInsert(['id' => 4], ['school_name' => '奈良学園登美ヶ丘中学校']);
        School::updateOrInsert(['id' => 5], ['school_name' => '南山中学女子部']);
        School::updateOrInsert(['id' => 6], ['school_name' => '南山中学男子部']);
        School::updateOrInsert(['id' => 7], ['school_name' => '金城学院中学校']);
        School::updateOrInsert(['id' => 8], ['school_name' => '鶯谷中学・高等学校']);
        School::updateOrInsert(['id' => 9], ['school_name' => '保善高等学校']);
        School::updateOrInsert(['id' => 10], ['school_name' => '聖霊中学校・高等学校']);
        School::updateOrInsert(['id' => 11], ['school_name' => '中部大学春日丘中学校']);
        School::updateOrInsert(['id' => 12], ['school_name' => '東海中学校']);
        School::updateOrInsert(['id' => 13], ['school_name' => '東海望星高等学校']);
        School::updateOrInsert(['id' => 14], ['school_name' => '奈良学園中学校高等学校']);
        School::updateOrInsert(['id' => 15], ['school_name' => '南山大学附属小学校']);

        Document::updateOrInsert(['id' => 1], ['content' => '帝塚山 中学校 検収・本番URL', 'secret_content' => 'levisマイグレーションのURLなど', 'school_id' => 1, 'document_kind' => DocumentKind::SchoolURL, 'permission_kind' => 'd', 'user_id' => 1]);
        Document::updateOrInsert(['id' => 2], ['content' => '百合学院中学校・高等学校  検収・本番URL', 'secret_content' => 'levisマイグレーションのURLなど', 'school_id' => 2, 'document_kind' => DocumentKind::SchoolURL, 'permission_kind' => 'd', 'user_id' => 1]);
        Document::updateOrInsert(['id' => 3], ['content' => '大阪女学院中学校  検収・本番URL', 'secret_content' => 'levisマイグレーションのURLなど', 'school_id' => 3, 'document_kind' => DocumentKind::SchoolURL, 'permission_kind' => 'd', 'user_id' => 1]);

        Document::updateOrInsert(['id' => 4], ['content' => '大阪女学院中学校 スケジュール', 'secret_content' => '', 'school_id' => 1, 'document_kind' => DocumentKind::Schedule, 'permission_kind' => 'd', 'user_id' => 1]);




    }
}



