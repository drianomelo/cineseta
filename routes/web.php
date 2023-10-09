<?php

use App\Http\Controllers\FilmeController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\SessaoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConsultasController;
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

Route::group(['prefix' => 'sessoes'], function () {
    Route::get('/', [SessaoController::class, 'index'])->name('sessoes.index');
    Route::get('create', [SessaoController::class, 'create'])->name('sessoes.create');
    Route::post('/', [SessaoController::class, 'store'])->name('sessoes.store');
    Route::get('{sessao}', [SessaoController::class, 'show'])->name('sessoes.show');
    Route::get('{sessao}/edit', [SessaoController::class, 'edit'])->name('sessoes.edit');
    Route::put('{sessao}', [SessaoController::class, 'update'])->name('sessoes.update');
    Route::delete('{sessao}', [SessaoController::class, 'destroy'])->name('sessoes.destroy');
});



Route::group(['prefix' => 'consultas'], function () {
    Route::get('/', [ConsultasController::class, 'index'])->name('consultas.index');
    Route::get('/basic', [ConsultasController::class, 'basic'])->name('consultas.basic');
    Route::get('/like', [ConsultasController::class, 'like'])->name('consultas.like');
    Route::get('/join', [ConsultasController::class, 'join'])->name('consultas.join');
    Route::get('/multiple-join', [ConsultasController::class, 'multipleJoin'])->name('consultas.multiple-join');
    Route::get('/agregacao', [ConsultasController::class, 'agregacao'])->name('consultas.agregacao');
    Route::get('/group-by', [ConsultasController::class, 'groupBy'])->name('consultas.group-by');
    Route::get('/group-by-having', [ConsultasController::class, 'groupByHaving'])->name('consultas.group-by-having');
    Route::get('/in', [ConsultasController::class, 'in'])->name('consultas.in');
    Route::get('/exists', [ConsultasController::class, 'exists'])->name('consultas.exists');
    Route::get('/all', [ConsultasController::class, 'all'])->name('consultas.all');
});
