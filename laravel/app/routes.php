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

// Route::get('/', function()
// {	$name = 'My test';
// 	return View::make('hello')->with('name', $name);
// });

Route::get('/', 'PagesController@index');
Route::get('/users', "UsersController@index");