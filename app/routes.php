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

Route::get('invoice/{any}', 'PublicController@display');

Route::controller('auth', 'AuthController');
Route::get('login',  array('as' => 'login',  'uses' => 'AuthController@getLogin'));
Route::post('login', 'AuthController@postLogin');
Route::get('logout', array('as' => 'logout', 'uses' => 'AuthController@getLogout'));

Route::group(array('before' => 'auth'), function()
{
	Route::get('/', 'DashboardController@index');
	Route::resource('dashboard', 'DashboardController');
	Route::resource('invoices',  'InvoicesController');
	Route::resource('clients',   'ClientsController');
	Route::resource('users',     'UsersController');
});
