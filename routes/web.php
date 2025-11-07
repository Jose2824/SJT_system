<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

use App\Http\Controllers\MotoristasController;
Route::resource('motoristas', MotoristasController::class);

use App\Http\Controllers\veiculoController;
Route::resource('veiculos', veiculoController::class);

use App\Http\Controllers\caminhoesController;
Route::resource('caminhoes', caminhoesController::class);

use App\Http\Controllers\clientesController;
Route::resource('clientes', ClientesController::class);

use App\Http\Controllers\RelatorioController;
Route::resource('relatorios', RelatorioController::class);


