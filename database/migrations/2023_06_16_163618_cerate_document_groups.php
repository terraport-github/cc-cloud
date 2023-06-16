<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('document_groups', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('代理キー');
            $table->string('title')->comment('タイトル');

            // 共通
            $table->timestamp('created_at')->nullable()->comment('作成日時');
            $table->timestamp('updated_at')->nullable()->comment('更新日時');
            $table->timestamp('deleted_at')->nullable()->comment('削除日時');
            $table->text('memo')->nullable()->comment('メモ');
        });
        DB::statement("ALTER TABLE `document_groups` COMMENT '資料グループ'");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_groups');
    }
};
