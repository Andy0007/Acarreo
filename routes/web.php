<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;

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

/************************************ */
/************************************ */
//*********** Ruta de Login **********//
/************************************ */
/************************************ */
Route::controller(LoginController::class)->group(function(){

    Route::get('/','index')
        ->name('home.index');

    Route::post('/login', 'login')
        ->name('home.login');
});

/************************************ */
/************************************ */
//*********** Ruta de Login **********//
/************************************ */
/************************************ */
Route::controller(IndexController::class)->group(function(){

    Route::get('/admin_index','admin_index')
        ->name('admin.index');

    Route::post('/operador_index', 'operador_index')
        ->name('operador.index');
});