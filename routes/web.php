<?php

use App\Http\Controllers\FilmeController;
use App\Http\Controllers\SalaController;
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

Route::group(['prefix' => 'salas'], function () {
    Route::get('/', [SalaController::class, 'index'])->name('salas.index');
    Route::get('create', [SalaController::class, 'create'])->name('salas.create');
    Route::post('/', [SalaController::class, 'store'])->name('salas.store');
    Route::get('{sala}', [SalaController::class, 'show'])->name('salas.show');
    Route::get('{sala}/edit', [SalaController::class, 'edit'])->name('salas.edit');
    Route::put('{sala}', [SalaController::class, 'update'])->name('salas.update');
    Route::delete('{sala}', [SalaController::class, 'destroy'])->name('salas.destroy');
});
