<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/* |--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
/ */

    Route::get('/', 'HomeController@index')->middleware('auth')->name('index')->middleware('auth');
    Route::get('/cursos', 'CursoController@index')->name('cursos')->middleware('auth');

    Route::post('/logout', 'LogoutController@index')->name('logout');
    Route::post('/inscrever-se', 'InscreverController@index')->name('inscrever-se')->middleware('auth');
    
    Route::post('/outro', 'DetalheController@index')->name('outro')->middleware('auth');
    
    Auth::routes();





/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home'); */