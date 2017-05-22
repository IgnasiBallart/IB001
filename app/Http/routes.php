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


Route::get('/', function () {
    return view('index');
});

/* FRONTEND */
Route::get('partidas','FrontController@partidas');
Route::get('equipos','FrontController@equipos');
Route::get('contacto','FrontController@contacto');

/* BACKEND */
Route::get('login', 'backend\LoginController@index');
Route::get('admin','backend\AdminController@index');
Route::resource('usuario','backend\UserController');