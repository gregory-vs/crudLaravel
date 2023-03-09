<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/clientes', [ClienteController::class, 'index']); // rota principal
Route::post('/clientes', [ClienteController::class, 'store']); // cria cliente
Route::get('/clientes/{id}', [ClienteController::class, 'show']); // retorna clientes