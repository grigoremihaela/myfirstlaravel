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

Route::get('/', 'PagesController@home');

/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/*
|--------------------------------------------------------------------------
| Users
|--------------------------------------------------------------------------
*/

Route::resource('users', 'UsersController');
//Route::get('users', 'UsersController@index'); 
//Route::get('users/{id}', 'UsersController@show');
//Route::get('users/{id}/edit', ['as' => 'edit', 'uses' =>'UsersController@edit']);

/*
|--------------------------------------------------------------------------
| Posts
|--------------------------------------------------------------------------
*/

Route::resource('posts', 'PostsController');
//Route::get('posts', 'PostsController@index');
//Route::get('posts/create', 'PostsController@create'); 
//Route::get('posts/{id}', 'PostsController@show');
//Route::post('posts', 'PostsController@store');
//Route::post('posts/{id}/edit', 'PostsController@update');
