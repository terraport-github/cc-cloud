<?php

namespace App\Models;

use App\Enums\DocumentKind;
use App\Enums\PermissionKind;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class DocumentGroupDetail extends Authenticatable
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
        'document_group_id',
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
    ];

    function documentGroup() {
        return $this->belongsTo(\App\Models\DocumentGroup::class);
    }

    // function user() {
    //     return $this->belongsTo(\App\Models\User::class);
    // }
}
