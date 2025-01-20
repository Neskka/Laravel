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
use App\Http\Controllers\KontoController;
use App\Http\Controllers\PanelController;


Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
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
Route::post('/psy/adopt', [PsyController::class, 'adoptDog'])->name('psy.adopt');
Route::get('/moje/{slug}', [MojeController::class, 'show'])->name('moje.show');
Route::patch('/adoptowane/{id}/cancel', [MojeController::class, 'cancel'])->name('adoptowane.cancel');
Route::get('/mojekonto', [KontoController::class, 'index'])->name('konto');
Route::get('/panel', [PanelController::class, 'index'])->name('panel');
Route::delete('/mojekonto', [KontoController::class, 'destroy'])->name('destroy');
Route::middleware('auth')->group(function () {
    Route::get('/konto', [KontoController::class, 'index'])->name('konto');
    Route::post('/konto/password-change', [KontoController::class, 'changePassword'])->name('password.change');
    Route::delete('/mojekonto', [KontoController::class, 'destroy'])->name('destroy');
});