<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;

Route::get('/', [PessoaController::class, 'index'])->name('pessoas.index');
Route::get('/pessoas/criar', [PessoaController::class, 'create'])->name('pessoas.create');
Route::post('/pessoas', [PessoaController::class, 'store'])->name('pessoas.store');
Route::get('/pessoas/{id}/edit', [PessoaController::class, 'edit'])->name('pessoas.edit');
Route::put('pessoas/{id}', [PessoaController::class, 'update']) ->name('pessoas.update');
Route::delete('pessoas/{id}', [PessoaController::class, 'destroy']) ->name('pessoas.destroy');
Route::get('pessoas/{id}', [PessoaController::class, 'show'])->name('pessoas.show');