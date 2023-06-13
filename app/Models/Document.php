<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Document extends Authenticatable
{

    use HasFactory;
    // 論理削除を有効にする
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'content',
        'secret_content',
        'school_id',
        'password',
        'user_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
    ];

    /**
     * 属性キャスト
     *
     * @var array
     */
    protected $casts = [
        'document_kind'    => DocumentKind::class,
        'permission_kind'  => PermissionKind::class,
    ];

    function school() {
        return $this->belongsTo(\App\Models\School::class);
    }
}
