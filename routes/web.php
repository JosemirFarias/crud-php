<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;

Route::get('/pessoas/criar', [PessoaController::class, 'create'])->name('pessoas.create');
Route::post('pessoas', [PessoaController::class, 'store'])->name('pessoas.store');

