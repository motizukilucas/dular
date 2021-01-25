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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Form create routes
Route::get('cliente-form', 'ClienteController@create');
Route::get('aparelho-form', 'AparelhoController@create');
Route::get('aparelho-form2', 'AparelhoController@create2');
Route::get('ordem-servico-form', 'OrdemServicoController@create');
Route::get('ordem-servico-tecnico-form', 'OrdemServicoTecnicoController@create');
Route::get('ordem-servico-aparelho-form', 'OrdemServicoAparelhoController@create');
Route::get('ordem-servico-aparelho-form2', 'OrdemServicoAparelhoController@create2');
Route::get('ordem-servico-peca-form', 'OrdemServicoPecaController@create');
Route::get('ordem-servico-peca-form2', 'OrdemServicoPecaController@create2');

// Form edit routes
// Route::get('ordem-servico-tecnico-edit-form/{id_os_tecnico}', 'OrdemServicoTecnicoController@edit');
Route::get('ordem-servico-tecnico-edit-form/{id_os_tecnico?}', 'OrdemServicoTecnicoController@edit');


Route::get('ordem-servico-edit-form/{id_ordem_servico}', 'OrdemServicoController@edit');

// Route::get('ordem-servico-peca-edit-form/{id_os_peca}', 'OrdemServicoPecaController@edit');

// return param with optional param
Route::get('ordem-servico-peca-edit-form/{id_os_peca?}', 'OrdemServicoPecaController@edit');

Route::get('ordem-servico-aparelho-edit-form/{id_os_aparelho}', 'OrdemServicoAparelhoController@edit');
Route::get('aparelho-edit-form/{id_aparelho}', 'AparelhoController@edit');
Route::get('cliente-edit-form/{id_cliente}', 'ClienteController@edit');

// Resource routes
Route::resource('cliente', 'ClienteController');
Route::resource('funcionario', 'FuncionarioController');
Route::resource('aparelho', 'AparelhoController');
Route::resource('ordem-servico', 'OrdemServicoController');
Route::resource('ordem-servico-aparelho', 'OrdemServicoAparelhoController');
Route::resource('ordem-servico-peca', 'OrdemServicoPecaController');
Route::resource('ordem-servico-tecnico', 'OrdemServicoTecnicoController');

// Retorna routes
Route::post('retorna-cliente', 'ClienteController@returnByCel');
Route::post('retorna-aparelho', 'AparelhoController@returnBySerial');

// Busca ordem route
Route::post('busca-ordem', 'OrdemServicoController@buscaForm');
