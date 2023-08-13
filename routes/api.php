<?php

use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/produtos', [ProdutoController::class, 'index']);
Route::post('/produtos', [ProdutoController::class, 'store']);
Route::put('/produtos/{id}', [ProdutoController::class, 'update']);
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy']);

Route::get('/estoques', [EstoqueController::class, 'index']);
Route::post('/estoques', [EstoqueController::class, 'store']);
Route::put('/estoques/{id}', [EstoqueController::class, 'update']);

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
