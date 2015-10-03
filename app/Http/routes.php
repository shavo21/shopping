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

Route::group(['prefix' => 'admin'], function()
{
	Route::get('login','AdminController@getLogin');
	Route::post('login','AdminController@postLogin');
	Route::get('logout','AdminController@getLogout');
	Route::get('dashboard','AdminController@getDashboard');
});

Route::get('login','UsersController@getLogin');
