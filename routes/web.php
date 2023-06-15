<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    $data = \App\Models\Produto::all();
    return view('index')->withData($data);
});

Route::get('vprodutos', function () {
    $data = \App\Models\Produto::all();
    return view('vprodutos')->withData($data);
});

Route::get('nprodutos', 'App\Http\Controllers\Produtos@create');
Route::post('nprodutos', 'App\Http\Controllers\Produtos@store');

Route::get('eprodutos/{sku}', 'App\Http\Controllers\Produtos@edit');
Route::post('eprodutos/{sku}', 'App\Http\Controllers\Produtos@update');

Route::get('cprodutos/{sku}', 'App\Http\Controllers\Produtos@carrinho');

Route::get('fproduto', 'App\Http\Controllers\Produtos@forget');

