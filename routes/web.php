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
    return view('buscaOrdem');
});

Route::get('/cria-ordem', function () {
    return view('criaOrdem');
});

// tá aqui porque o /edita-ordem é carregado nesse gera-editar
Route::post('gera-editar', 'OrdemServicoController@geraEditarForm');

Route::get('/edita-ordem', function () {
    return view('editaOrdem');
});


