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
        Schema::create('document_group_details', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('代理キー');
            $table->unsignedBigInteger('document_group_id')->comment('資料グループID');
            $table->string('document_kind')->comment('資料種別');
            $table->unique(['document_kind', 'document_group_id']);
            
            // 共通
            $table->timestamp('created_at')->nullable()->comment('作成日時');
            $table->timestamp('updated_at')->nullable()->comment('更新日時');
            $table->timestamp('deleted_at')->nullable()->comment('削除日時');
            $table->text('memo')->nullable()->comment('メモ');
        });
        DB::statement("ALTER TABLE `document_group_details` COMMENT '資料'");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_group_details');
    }
};
