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
//Route::get('users', 'UsersController@index');          //show all users
//Route::get('users/{id}', 'UsersController@show');      //show a user
//Route::get('users/{id}/edit', 'UsersController@edit'); //show auth user profile

/*
|--------------------------------------------------------------------------
| Posts
|--------------------------------------------------------------------------
*/
/*
Route::get('posts', 'PostsController@index');               //show all posts
Route::get('posts/create', 'PostsController@create');       //form for to create a new post
Route::post('posts/{post}', 'PostsController@show');        //show only a post
Route::put('posts', 'PostsController@store');               // save the new created post with a user_id associated
Route::patch('posts/{post}/edit', 'PostsController@update'); //to update a post
*/
Route::get('posts/postsAuth', 'PostsController@postsAuth'); // show posts created of auth user
Route::resource('posts', 'PostsController');

Route::get("faq", function()
{
	return View::make("pages.faq");
});
	
