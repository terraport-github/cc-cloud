<?php

namespace App\Models;

use App\Enums\DocumentKind;
use App\Enums\PermissionKind;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class DocumentGroup extends Authenticatable
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
        'title',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
    ];

    function documentGroupDetails() {
        return $this->hasMany(\App\Models\DocumentGroupDetail::class);
    }

    // function user() {
    //     return $this->belongsTo(\App\Models\User::class);
    // }
}
