<?php

use Illuminate\Http\Request;

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



Route::namespace('API')->name('api.')->group(function (){

    Route::prefix('estados')->group(function () {

        Route::get('/listarApiE', 'ListarController@index')->name('listarUsuariosApi');

        Route::get('/listarApi', 'EstadoController@index')->name('index_estados');

        Route::get('/{id}', 'EstadoController@show')->name('estado');

        Route::post('/inserir', 'EstadoController@store')->name('salvar_estados');

        Route::post('/login', 'ListarController@getDados')->name('login');;

    });
});
