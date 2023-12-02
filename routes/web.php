<?php

use App\Http\Controllers\ContatoController;
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

Route::get('/sobre-nos',[SobreNosController::class, 'index' ]);

Route::get('/contato',[ContatoController::class, 'index']);

//Recebendo parâmentros na rota
Route::get('/contato/{name}', function(string $name){
    return "My name is: " . $name;
});

// Deixar o parâmetros opcional
Route::get('/contato/{name}/{age?}', function(string $name, int $age = 34){
    return "My name is: " . $name. '- i have: '.$age. ' year old' ;
});


