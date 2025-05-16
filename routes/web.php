<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroController;

Route::get('/', function () {
    return redirect('/heroes');
});

Route::get('/heroes', [HeroController::class, 'index'])->name('heroes.index');
Route::get('heroes/create', [HeroController::class, 'create'])->name('heroes.create');
Route::get('/heroes/{id}', [HeroController::class, 'show'])->name('heroes.show');
Route::get('/heroes/{id}/edit', [HeroController::class, 'edit'])->name('heroes.edit');

Route::post('/heroes', [HeroController::class, 'store'])->name('heroes.store');
Route::put('/heroes/{id}', [HeroController::class, 'update'])->name('heroes.update');
Route::delete('/heroes/{id}', [HeroController::class, 'destroy'])->name('heroes.destroy');
