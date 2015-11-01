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
	Route::get('users','AdminController@getUsers');
	Route::get('edit-user/{id}','AdminController@getEditUser');
	Route::get('remove-user/{id}','AdminController@getRemoveUser');
	Route::get('add-user','AdminController@getAddUser');
	Route::post('add-user','AdminController@postAddUser');
});

Route::group(['prefix' => 'shop/admin'], function()
{
	Route::get('login','AdminController@getLogin');
	Route::post('login','AdminController@postLogin');
});

Route::get('login','UsersController@getLogin');
