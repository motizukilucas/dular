<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ordemServicoMail;
use App\Mail\testMail;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', function() {
    return view('buscaOrdem');
});

Route::get('/cria-ordem', function() {
    return view('criaOrdem');
});

// tá aqui porque o /edita-ordem é carregado nesse gera-editar
Route::post('gera-editar', 'OrdemServicoController@geraEditarForm');

Route::get('/edita-ordem', function() {
    return view('editaOrdem');
});

Route::get('/email', function() {
    // Mail::to('motizukilucas@gmail.com')->send(new ordemServicoMail());

    return new testMail("Lucas Motizuki");
});

Route::get('/envia-email', 'OrdemServicoController@enviaEmail');

// Route::get('/envia-email', function() {
//     return new ordemServicoMail("Lucas Motizuki");
// });
