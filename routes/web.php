<?php

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

Route::post('/enviar', function (Illuminate\Http\Request $request) {
    $produtos = new App\Produtos();
    $produtos->codigo_produto = $request->get('codigo_produto');
    $produtos->nome_produto = $request->get('nome_produto');
    $produtos->categoria = $request->get('categoria');
    $produtos->preco = $request->get('preco');
    $produtos->descricao = $request->get('descricao');

    $produtos->save();

    echo "Formulário enviado! Código: " . $produtos->id;
});