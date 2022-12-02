<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroRemedio;
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
    return view('landing_page');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/bulas', function () {
    return view('bulas');
})->name('bulas');;

Route::get('/clinicas', function () {
    return view('clinicas_prox');
})->name('Clinicas');

    
/*     //Rota para inserção no BD dos movimentos - C do CRUD
    Route::post('/processa', [MovimentoController::class, 'gravar'])->name('processa');
 
    //Rota extrato - READ R do CRUD
    Route::get('/extrato', [MovimentoController::class, 'get_movimentos'])->name('extrato');
 
    //Rotas para o UPDATE - U do CRUD - uma rota para o formulário de atualização
    Route::get('/editar/{id}', [MovimentoController::class, 'get_movimento'] )->name('editar');
 
    //Rota para processar a atualização
    Route::put('/atualiza', [MovimentoController::class, 'atualizar'] )
    ->name('atualiza');
    //Rotas para o DELETE - D do CRUD - uma rota para o formulário de Deletar
    Route::delete('/deletar/{id}', [MovimentoController::class, 'deletar'] )->name('deletar');
}); */ 


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/cadastro_remedio', function () {
        return view('cadastro_remedio');
    })->name('cadastro_remedio');
    
    Route::get('/meus_medicamentos', function () {
        return view('cadastro_remedio');
    })->name('meus_medicamentos');
    
    /* Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');  */

    Route::post('/grava_remedio',[CadastroRemedio::class, 'gravar'] )->name('grava_remedio');

    Route::get('/dashboard',[CadastroRemedio::class, 'get_medicamento'] )->name('dashboard');

});
