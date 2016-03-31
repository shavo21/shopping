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
	Route::get('/','AdminController@getLogin');
	Route::post('login','AdminController@postLogin');
	Route::get('logout','AdminController@getLogout');
	Route::get('dashboard','AdminController@getDashboard');
	Route::get('users','AdminController@getUsers');
	Route::get('edit-user/{id}','AdminController@getEditUser');
	Route::put('edit-user/{id}','AdminController@putEditUser');
	Route::get('remove-user/{id}','AdminController@getRemoveUser');
	Route::get('add-user','AdminController@getAddUser');
	Route::post('add-user','AdminController@postAddUser');
	Route::get('types','ProductController@getTypes');
	Route::get('add-type','ProductController@getAddType');
	Route::post('add-type','ProductController@postAddType');
	Route::get('edit-type/{id}','ProductController@getEditType');
	Route::put('edit-type/{id}','ProductController@putEditType');
	Route::get('remove-type/{id}','ProductController@getRemoveType');
	Route::get('products','ProductController@getProducts');
	Route::get('add-product','ProductController@getAddProduct');
	Route::post('add-product','ProductController@postAddProduct');
	Route::get('edit-product/{id}','ProductController@getEditProduct');
	Route::put('edit-product/{id}','ProductController@putEditProduct');
	Route::get('remove-product/{id}','ProductController@getRemoveProduct');
});

Route::group(['prefix' => 'shop-admin'], function()
{
	Route::get('login','ShopController@getLogin');
	Route::post('login','ShopController@postLogin');
	Route::get('dashboard','ShopController@getDashboard');
	Route::get('logout','ShopController@getLogout');
	Route::post('user','ShopController@postUser');
	Route::get('user-page/{key}','ShopController@getUserPage');
	Route::post('edit-balance/{id}','ShopController@postEditBalance');
});

Route::get('/','UsersController@getDashboard');
Route::get('login','UsersController@getLogin');
Route::post('login','UsersController@postLogin');
Route::get('logout','UsersController@getLogout');
Route::get('registration','UsersController@getRegistration');
Route::post('registration','UsersController@postRegistration');
Route::get('products/{type}','UsersController@getProducts');
Route::get('product/{type}/{name}','UsersController@getProduct');
Route::get('account','UsersController@getAccount');
Route::post('edit-user','UsersController@postEditUser');
Route::get('shopping','UsersController@getShopping');
Route::get('basket/{id}','UsersController@getBasket');