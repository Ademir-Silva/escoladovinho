<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('site/index');
});

Route::get('/teste', [App\Http\Controllers\InsumosController::class, 'showB'])->name('teste');

Auth::routes();

Route::get('/create', [App\Http\Controllers\ProdutosController::class, 'create']);
Route::post('/create', [App\Http\Controllers\ProdutosController::class, 'store'])->name('registra_produtos');
Route::get('/home/ver_reagentes', [App\Http\Controllers\ProdutosController::class, 'show'])->name('ver_reagentes');
Route::get('/home/editar_reagentes/{id}', [App\Http\Controllers\ProdutosController::class, 'edit'])->name('editar_reagentes');
Route::put('/home/atualizar_reagentes/{id}', [App\Http\Controllers\ProdutosController::class, 'update'])->name('atualizar_reagentes');
Route::delete('/home/ver_reagentes/{id}', [App\Http\Controllers\ProdutosController::class, 'destroy'])->name('deletar_reagentes');
Route::get('/home', 'InsumosController@home');
Route::post('/home', [App\Http\Controllers\InsumosController::class, 'store'])->name('registra_insumos');
Route::get('/home/ver_insumos', [App\Http\Controllers\InsumosController::class, 'show'])->name('ver_insumos');
Route::get('/home/ver_insumos/data/crescente', [App\Http\Controllers\InsumosController::class, 'showData'])->name('ver_insumos_data');
Route::get('/home/ver_insumos/data/decrescente', [App\Http\Controllers\InsumosController::class, 'showDataDec'])->name('ver_insumos_data_dec');
Route::get('/home/ver_insumos/adquirido/crescente', [App\Http\Controllers\InsumosController::class, 'showAd'])->name('ver_insumos_ad');
Route::get('/home/ver_insumos/adquirido/decrescente', [App\Http\Controllers\InsumosController::class, 'showAdDec'])->name('ver_insumos_ad_dec');
Route::get('/home/ver_insumos/nome/crescente', [App\Http\Controllers\InsumosController::class, 'showNome'])->name('ver_insumos_nome');
Route::get('/home/ver_insumos/nome/decrescente', [App\Http\Controllers\InsumosController::class, 'showNomeDec'])->name('ver_insumos_nome_dec');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/editar_insumos/{id}', [App\Http\Controllers\InsumosController::class, 'edit'])->name('editar_insumos');
Route::put('/home/atualizar_insumos/{id}', [App\Http\Controllers\InsumosController::class, 'update'])->name('atualizar_insumos');
Route::delete('/home/ver_insumos/{id}', [App\Http\Controllers\InsumosController::class, 'destroy'])->name('deletar_insumos');
Route::get('/home/sobre', [App\Http\Controllers\HomeController::class, 'about'])->name('sobre');


/* Rotas dos Insumos */

Route::post('/home/inserir_insumo', [App\Http\Controllers\InsumosController::class, 'store'])->name('registra_insumos');
/*
Rotas das Solicitações
*/

Route::get('/pedidos/solicitar', [App\Http\Controllers\PedidosController::class, 'home'])->name('solicitar');;
Route::post('/pedidos/solicitar/submeter', [App\Http\Controllers\PedidosController::class, 'store'])->name('registra_pedidos');
Route::get('/pedidos/ver_solicitações', [App\Http\Controllers\PedidosController::class, 'show'])->name('solicitações');
Route::get('/home/ver_solicitações', [App\Http\Controllers\PedidosController::class, 'showA'])->name('ver_solicitações');
Route::get('/pedidos/tabela_insumos', [App\Http\Controllers\InsumosController::class, 'showA'])->name('tabela_insumos');
Route::get('/pedidos/tabela_reagentes', [App\Http\Controllers\ProdutosController::class, 'showA'])->name('tabela_reagentes');
Route::get('/home/editar_solicitações/{id}', [App\Http\Controllers\PedidosController::class, 'edit'])->name('editar_solicitações');
Route::put('/home/atualizar_solicitações/{id}', [App\Http\Controllers\PedidosController::class, 'update'])->name('atualizar_solicitações');
Route::delete('/home/ver_solicitações/{id}', [App\Http\Controllers\PedidosController::class, 'destroy'])->name('deletar_solicitações');

/*
Rotas do Estoque
*/

Route::post('/home', [App\Http\Controllers\EstoquesController::class, 'store'])->name('registra_estoque');
Route::get('/home/ver_estoque', [App\Http\Controllers\EstoquesController::class, 'show'])->name('ver_estoque');
Route::get('/home/editar_estoque/{id}', [App\Http\Controllers\EstoquesController::class, 'edit'])->name('editar_estoque');
Route::put('/home/atualizar_estoque/{id}', [App\Http\Controllers\EstoquesController::class, 'update'])->name('atualizar_estoque');
Route::delete('/home/ver_estoque/{id}', [App\Http\Controllers\EstoquesController::class, 'destroy'])->name('deletar_estoque');

