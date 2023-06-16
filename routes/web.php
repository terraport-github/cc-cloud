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

//仕様書 モック
Route::get('/documents', function () {
    return view('documents.index');
});
Route::get('documents/{school_id}/detail', function () {
    return view('documents.detail');
});


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