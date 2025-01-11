<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PsyController;
use App\Http\Controllers\AdoptowaneController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DogController;
use App\Http\Controllers\KontaktController;
use App\Http\Controllers\MojeController;
use App\Http\Controllers\OnasController;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/psy', [PsyController::class, 'index'])->name('psy');
Route::get('/psy/{slug}', [PsyController::class, 'show'])->name('psy.show');
Route::get('/adoptowane', [AdoptowaneController::class, 'index'])->name('adoptowane');
Route::get('/adoptowane/{slug}', [AdoptowaneController::class, 'show'])->name('adoptowane.show');
Route::get('/onas', [OnasController::class, 'index'])->name('onas');
Route::get('/kontakt', [KontaktController::class, 'index'])->name('kontakt');
Route::get('/moje', [MojeController::class, 'index'])->name('moje');
Route::get('/dodaj', [DogController::class, 'create'])->name('dodaj');
Route::post('/dogs', [DogController::class, 'store'])->name('dogs.store');
Route::resource('/dogs', DogController::class);