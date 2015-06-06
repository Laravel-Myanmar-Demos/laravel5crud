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

//Remove scaffold with php artisan fresh

// Route::get('/', 'WelcomeController@index');
// Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);


//Route::resource('/crud', 'CrudController');

Route::get('crud', 'CrudController@index');
Route::get('crud/create', 'CrudController@create');
Route::post('crud', 'CrudController@store');
Route::get('crud/{id}/edit', 'CrudController@edit');
Route::patch('crud/{id}', 'CrudController@update');
Route::delete('crud/{id}', 'CrudController@destroy');














