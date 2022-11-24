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
    return view('landing_page');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/bulas', function () {
    return view('bulas');
})->name('bulas');;

Route::get('/clinicas', function () {
    return view('clinicas_prox');
})->name('Clinicas');;

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
