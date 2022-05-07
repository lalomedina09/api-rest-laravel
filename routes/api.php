<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/articulos', [App\Http\Controllers\ArticuloController::class, 'index']); // Retorna lista de registros de DB
Route::post('/articulos', [App\Http\Controllers\ArticuloController::class, 'store']); // Agrega un registro en DB
Route::put('/articulos/{id}', [App\Http\Controllers\ArticuloController::class, 'update']); // Actualiza registro en DB
Route::delete('/articulos/{id}', [App\Http\Controllers\ArticuloController::class, 'destroy']); // Elimina un registro de DB
