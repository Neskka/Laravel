<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/psy', [App\Http\Controllers\PsyController::class, 'index'])->name('psy');
Route::get('/adoptowane', [App\Http\Controllers\AdoptowaneController::class, 'index'])->name('adoptowane');
Route::get('/onas', [App\Http\Controllers\OnasController::class, 'index'])->name('onas');
Route::get('/kontakt', [App\Http\Controllers\KontaktController::class, 'index'])->name('kontakt');
Route::get('/moje', [App\Http\Controllers\MojeController::class, 'index'])->name('moje');
