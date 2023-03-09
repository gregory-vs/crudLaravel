<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;


Route::get('/', function () {

    $returnDB = ClienteController::index();

    return view('viewcliente', ['arrayClientes' => $returnDB]);
});

Route::post('cadastracliente', [ClienteController::class, 'store']);
Route::get('deletacliente/{id}', [ClienteController::class, 'destroy'])->name('cliente.destroy');
Route::post('editarcliente', [ClienteController::class, 'update']);