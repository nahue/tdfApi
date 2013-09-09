<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::filter('auth.basic', function()
{
    return Auth::basic("username");
});

Route::group(array('prefix' => 'api/v1', 'before' => 'auth.basic'), function() {

    Route::resource('fotos', 'FotosController');

    Route::resource('categorias', 'CategoriaController');

    Route::resource('categorias.fotos', 'CategoriasFotosController');

});


