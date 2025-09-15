<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente', [ClienteController::class, 'index']);
Route::post('/cliente', [ClienteController::class, 'recebeDados'])->name('cliente.novo');

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produto.lista');
//Route::post('/produto', [ProdutoController::class, 'mostraProduto'])->name('produto.lista');

/*Route::get('/clientes', function () {
    return view('clientes.index');
});*/

/*Route::get('/produtos', function () {
    return view('produtos.index');
});*/

Route::get('/template_admin', function () {
    return view('template_admin.index');
});

