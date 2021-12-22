<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\ApiController;
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

Route::resource('/categorias', CategoriaController::class);

Route::get('/categorias',[ApiController::class,'getCategorias']);
Route::post('/categorias',[ApiController::class,'criarCategoria']);
Route::get('/categorias/{categoria}',[ApiController::class,'getCategoria']);
Route::put('/categorias/{categoria}/update',[ApiController::class,'atualizarCategoria']);
Route::delete('/categorias/{categoria}',[ApiController::class,'excluirCategoria']);