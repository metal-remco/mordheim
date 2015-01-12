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

Route::get('/', function()
{
	return View::make('index');
});


Route::group(array('prefix' => 'api/v1'), function()
{
	//User routes
	Route::resource('users', 'UserController');
	//Route::resource('users/{name}', 'UserController@show');
	Route::resource('users.warbands', 'UserController@getUserWarband');

});


//Catch all routess for angular
App::missing(function($exception) {
	return View::make('index');
});
