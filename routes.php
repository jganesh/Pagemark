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

/*Route::get('/', function()
{
	return View::make('login');
});

Route::get('index', function()
{
	return View::make('login');
});

Route::get('login', function()
{
	return View::make('login');
});

Route::get('register', function()
{
	return View::make('register');
});*/

Route::get('/','HomeController@getIndex');

Route::get('login','HomeController@getLogin');

Route::post('login','HomeController@postLogin');

Route::get('register','HomeController@getRegister');

Route::post('register','HomeController@postRegister');

Route::get('logout', 'HomeController@logout');

Route::get('profile','HomeController@getProfile');

Route::post('data','DataController@postData');

Route::post('file','DataController@postFile');