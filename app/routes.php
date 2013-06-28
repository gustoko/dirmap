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

Route::get('nuevo', function()
{
	$usuario = new Usuario;

	$usuario->mail = "gus.aranguiz@gmail.com";
	$usuario->password = Hash::make('gus.aranguiz@gmail.com');

	$usuario->save();

	return 'Guardado!';

});

Route::resource('usuarios', 'UsuarioController' ,  ['only' => ['index', 'show']]);
//Route::get('controller','HomeController@showWelcome');
//Route::resource('usuarios', 'UsuarioController');