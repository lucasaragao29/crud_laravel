<?php

use App\Http\Controllers\ProdutosController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/produtos/novo',[ProdutosController::class,'create']);
Route::post('/produtos/novo',[ProdutosController::class,'store'])->name('registrar_produto');
Route::get('/produtos/ver{id}',[ProdutosController::class,'show']);
Route::get('/produtos/editar{id}',[ProdutosController::class,'edit']);
Route::post('/produtos/editar{id}',[ProdutosController::class,'update'])->name('alterar_produto');
Route::get('/produtos/deletar{id}',[ProdutosController::class,'delete']);
Route::post('/produtos/deletar{id}',[ProdutosController::class,'destroy'])->name('deletar_produto');
