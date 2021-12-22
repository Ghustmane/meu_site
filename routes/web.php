<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Route::get('/user', [UsersController::class, 'index']);

Route::get('/outra', function(){
	return view('nova');
})->name('nova');

//definir rota de produtos
//Route::get('/produtos', [ProdutosController::class, 'index']);

Route::resource('/produtos', ProdutosController::class);
Route::resource('/categorias', CategoriasController::class);
Route::resource('/user', UsersController::class);
Route::resource('/post', PostsController::class);
