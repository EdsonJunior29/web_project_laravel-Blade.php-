<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
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

Route::get('/',[PrincipalController::class , 'index']);
Route::post('/',[PrincipalController::class , 'index']);
Route::get('/sobre-nos',[SobreNosController::class, 'index' ]);
Route::get('/contato',[ContatoController::class, 'index']);
Route::post('/contato',[ContatoController::class, 'store']);
Route::get('/login', function(){return 'login';});

Route::prefix('/app')->group( function (){
    Route::get('/clientes',function(){return 'clientes';});
    Route::get('/fornecedores',[FornecedorController::class, 'index']);
    Route::get('/produtos',function(){return 'produtos';});
});

Route::fallback(function(){
    echo 'Erro ao acessar a rota. 
        <a href="/">click aqui</a> para voltar a página inicial';
});