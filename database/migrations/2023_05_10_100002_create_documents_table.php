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
        Schema::create('documents', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('代理キー');
            $table->text('content')->nullable()->comment('内容');
            $table->text('secret_content')->nullable()->comment('重要内容');
            $table->unsignedBigInteger('school_id')->nullable()->comment('学校ID');
            $table->string('document_kind')->comment('資料種別');
            $table->string('permission_kind')->comment('権限種別');
            $table->unsignedBigInteger('user_id')->comment('最終利用者');
            $table->unique(['document_kind', 'school_id']);
            
            // 共通
            $table->timestamp('created_at')->nullable()->comment('作成日時');
            $table->timestamp('updated_at')->nullable()->comment('更新日時');
            $table->timestamp('deleted_at')->nullable()->comment('削除日時');
            $table->text('memo')->nullable()->comment('メモ');
        });
        DB::statement("ALTER TABLE `documents` COMMENT '資料'");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
