<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SobreNosController;
use App\Http\Middleware\LogAcessMiddleware;
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
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'store']);

Route::middleware('autenticacao')->prefix('/app')->group( function (){
    Route::get('/home',[HomeController::class, 'index']);
    Route::get('/clientes',[ClienteController::class, 'index']);

    Route::get('/fornecedores',[FornecedorController::class, 'index']);
    Route::get('/fornecedores/teladecadastro',[FornecedorController::class, 'suppliers']);
    Route::post('/fornecedores/listar',[FornecedorController::class, 'list']);
    Route::post('/fornecedores/cadastrar',[FornecedorController::class, 'store']);
    
    Route::get('/produtos',[ProdutoController::class, 'index']);
    Route::get('/sair',[LoginController::class, 'logout']);
});

Route::fallback(function(){
    echo 'Erro ao acessar a rota. 
        <a href="/">click aqui</a> para voltar a página inicial';
})->name('fallback');