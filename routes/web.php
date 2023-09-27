<?php

use App\Http\Controllers\FilmeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'filmes'], function () {
    Route::get('/', [FilmeController::class, 'index'])->name('filmes.index');
    Route::get('create', [FilmeController::class, 'create'])->name('filmes.create');
    Route::post('/', [FilmeController::class, 'store'])->name('filmes.store');
    Route::get('{filme}', [FilmeController::class, 'show'])->name('filmes.show');
    Route::get('{filme}/edit', [FilmeController::class, 'edit'])->name('filmes.edit');
    Route::put('{filme}', [FilmeController::class, 'update'])->name('filmes.update');
    Route::delete('{filme}', [FilmeController::class, 'destroy'])->name('filmes.destroy');
});