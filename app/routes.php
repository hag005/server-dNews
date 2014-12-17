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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('noticias', function()
{
    // Obtengo todas las Noticias presentes en la base de datos.
    $noticias = Noticia::all();

    // Retorno las Noticias, por defecto se transforman a formato JSON.
    return $noticias;
});
