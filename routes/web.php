<?php

use App\Http\Controllers\SchoolController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// システム
Route::group(['prefix' => 'system', 'as' => 'system'], function () {
    Route::get('/', function () {
        return view('system.home');
    })->name('');
});


// ユーザー
Route::get('home', function () {
    return view('home');
})->name('home');

//各校
Route::get('school', [App\Http\Controllers\SchoolController::class, 'index'])->name('school');
Route::get('school/{school_id}/detail', [App\Http\Controllers\SchoolController::class, 'detail'])->name('school.detail');
Route::get('school/{school_id}/edit', [App\Http\Controllers\SchoolController::class, 'edit'])->name('school.edit');
// 共通の更新
Route::post('school/{school_id}/edit', [App\Http\Controllers\SchoolController::class, 'post'])->name('school.post');

// 仕様書
Route::get('document', [App\Http\Controllers\DocumentController::class, 'index'])->name('document');
Route::get('document/{document_kind}/detail', [App\Http\Controllers\DocumentController::class, 'detail'])->name('document.detail');
Route::get('document/{document_kind}/{school_id}/edit', [App\Http\Controllers\DocumentController::class, 'edit'])->name('document.edit');

// 仕様書 第２階層
Route::get('document_group/{document_group_id}', [App\Http\Controllers\DocumentGroupController::class, 'index'])->name('document_group');
Route::get('document_group/{document_group_detail_id}/detail', [App\Http\Controllers\DocumentGroupController::class, 'detail'])->name('document_group.detail');
Route::get('document_group/{document_group_detail_id}/{school_id}/edit', [App\Http\Controllers\DocumentGroupController::class, 'edit'])->name('document_group.edit');

// カルテ
Route::get('karte', [App\Http\Controllers\KarteController::class, 'index'])->name('karte');
Route::get('karte/{school_id}/detail', [App\Http\Controllers\KarteController::class, 'detail'])->name('karte.detail');
Route::get('karte/{school_id}/edit', [App\Http\Controllers\KarteController::class, 'edit'])->name('karte.edit');

// 業務改善
Route::get('efficiency', [App\Http\Controllers\EfficiencyController::class, 'index'])->name('efficiency');
// Route::get('efficiency/{school_id}/detail', [App\Http\Controllers\KarteController::class, 'detail'])->name('karte.detail');
// Route::get('efficiency/{school_id}/edit', [App\Http\Controllers\KarteController::class, 'edit'])->name('karte.edit');