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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('代理キー');
            $table->string('name')->comment('ユーザ名');
            $table->string('email')->unique()->comment('メールアドレス');
            $table->string('password')->comment('パスワード');
            $table->string('permission_kind')->comment('権限種別');
            $table->rememberToken('remember_token')->nullable()->comment('リメンバートークン');
            
            // 共通
            $table->timestamp('created_at')->nullable()->comment('作成日時');
            $table->timestamp('updated_at')->nullable()->comment('更新日時');
            $table->timestamp('deleted_at')->nullable()->comment('削除日時');
            $table->text('memo')->nullable()->comment('メモ');
        });
        DB::statement("ALTER TABLE `users` COMMENT 'ユーザ'");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
