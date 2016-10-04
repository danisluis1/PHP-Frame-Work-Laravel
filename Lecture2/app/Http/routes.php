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
/** -- URL: http://localhost/luis/public **/
Route::get('/', 'WelcomeController@index');

/** -- URL: http://localhost/luis/public/home **/
Route::get('home', 'HomeController@index');

/** -- URL: http://localhost/luis/public/contact **/
Route::get('/contact','ContactController@contact');

/** -- URL: http://localhost/luis/public/contact **/
Route::get('/about','AboutController@about');

/** -- URL: http://localhost/luis/public/about **/
Route::get('/aboutme','PagesController@aboutme');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

