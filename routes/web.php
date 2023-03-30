<?php

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
});

//仕様書
Route::get('/documents', function () {
    return view('documents.index');
});
Route::get('documents/{school_code}/detail', function () {
    return view('documents.detail');
});



//各校
Route::get('/schools', function () {
    return view('schools.index');
});
Route::get('schools/{school_code}/detail', function () {
    return view('schools.detail');
});

Route::get('schools/{school_code}/update', function () {
    return view('schools.update');
})->name('schools.update');
