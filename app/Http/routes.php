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
//Route::get('home', 'PagesController@home');
//Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']); 

/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


//Route::bind('user', function(App\User $id) {
//    return DB::table('users')->where('id', $id)->first();
//	  return User::where('id', $id)->firstOrFail();  });

Route::resource('users', 'UsersController');
//Route::get('users', 'UsersController@index'); 
//Route::get('users/{id}', 'UsersController@show');
//Route::get('users/{id}/edit', ['as' => 'edit', 'uses' =>'UsersController@edit']);

//Route::get('users/{id}', function( $id)
//{ return View::make('users.show'); });

Route::resource('posts', 'PostsController');
Route::post('posts/{id}/edit', 'PostsController@update');
//Route::get('posts', 'PostsController@index');
//Route::get('posts/create', 'PostsController@create'); 
//Route::get('posts/{id}', 'PostsController@show');
//Route::post('posts', 'PostsController@store');
