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

Route::get('/', function()
	{
		if(Auth::check()) return 'Welcome back,' .Auth::user()->name . link_to('/auth/logout', 'Logout');
		return 'Hi guest.' . link_to('login', 'Login with Github');
	});
Route::get('login', 'Auth\AuthController@redirectToProvider');
*/
Route::get('/', 'PagesController@home');

/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/

Route::get('auth/github', 'Auth\AuthController@redirectToProvider');
Route::get('auth/github/callback', 'Auth\AuthController@handleProviderCallback');
Route::get("auth/facebook", function()
{
	return View::make("auth.facebook");
});
Route::get("auth/twitter", function()
{
	return View::make("auth.twitter");
});
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
Route::bind('posts', function ($slug) 
{ 
    return \App\Post::where('slug', $slug)->first();
});   
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
	
