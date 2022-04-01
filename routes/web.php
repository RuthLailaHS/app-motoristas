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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('home');
    })->name('home');


Route::middleware(['auth:sanctum', 'verified'])->get('/cadastrar-veiculo', function () {
    return view('cadastrar-veiculo');
    })->name('cadastrar-veiculo');


Route::middleware(['auth:sanctum', 'verified'])->get('/localizar-servicos', function () {
    return view('localizar-servicos');
    })->name('localizar-servicos');


Route::middleware(['auth:sanctum', 'verified'])->get('/estatisticas', function () {
    return view('estatisticas');
    })->name('estatisticas');


Route::middleware(['auth:sanctum', 'verified'])->get('/abastecimento', function () {
    return view('abastecimento');
    })->name('abastecimento');


Route::middleware(['auth:sanctum', 'verified'])->get('/manutencao', function () {
    return view('manutencao');
    })->name('manutencao');


Route::middleware(['auth:sanctum', 'verified'])->get('/ajudai', function () {
    return view('ajudai');
    })->name('ajudai');


Route::middleware(['auth:sanctum', 'verified'])->get('/simulador', function () {
    return view('simulador');
    })->name('simulador');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
