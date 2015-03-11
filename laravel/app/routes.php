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

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/prueba', ['as' => 'prueba', 'uses' => 'HomeController@index2']);

//Registrar usuario
Route::post('/regitrar/usuario', ['as' => 'register', 'uses' => 'UserController@register']);
Route::post('/contactar', ['as' => 'contact', 'uses' => 'HomeController@contact']);
Route::post('/save/info', ['as' => 'saveInfo', 'uses' => 'UserController@saveInfo']);