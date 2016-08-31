<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Bloq	ue de Front Controller tanto para formulario de login y password como para el panel administrativo*/
Route::get('/','FrontController@index');
Route::get('admin','FrontController@admin');




//Rutas de Logpara login y logout
Route::resource('log','LogController');
Route::get('logout','LogController@logout');

//Ruta para Usuarios
Route::resource('usuario','UsuarioController');
