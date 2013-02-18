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

// ! Public route
Route::get('ln/{hash}', 'PublicController@display');

// ! Auth routes
Route::controller('auth', 'AuthController');
Route::get('login',  array('as' => 'login',  'uses' => 'AuthController@getLogin'));
Route::post('login', 'AuthController@postLogin');
Route::get('logout', array('as' => 'logout', 'uses' => 'AuthController@getLogout'));

// ! App routes
Route::group(array('before' => 'auth'), function()
{
	Route::get('/', 'DashboardController@index');
	Route::resource('dashboard', 'DashboardController');
	Route::resource('invoices',  'InvoicesController');
	Route::get('invoices/{id}/send',   'InvoicesController@getSend');
	Route::post('invoices/{id}/send',  'InvoicesController@postSend');
	Route::resource('clients',   'ClientsController');
	Route::resource('projects',  'ProjectsController');
	Route::resource('users',     'UsersController');
});

// ! Api routes
Route::group(array('before' => 'api_auth'), function()
{
	Route::resource('api/invoices',  'Api\InvoicesController');
	Route::resource('api/clients',   'Api\ClientsController');
	Route::resource('api/projects',  'Api\ProjectsController');
});

if (Request::segment(1) == 'api')
{
	// Custom 404 handler
	\App::error(function(Exception $e, $code) {
		if ($code == 404) return Response::json(array('error' => '404', 'message' => 'Resource not found ['.$e->getMessage().']'), 404);
		if ($code == 500) return Response::json(array('error' => '500', 'message' => 'Internal server error ['.$e->getMessage().']'), 500);
	});
}
