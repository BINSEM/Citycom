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

Route::get('/', function () {
	return view('/home');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/profile', 'HomeController@profile');
Route::get('/profile/edit/{id}', 'HomeController@editProfile');
Route::post('/profile/update/{id}', 'HomeController@updateProfile');
Route::get('/profile/addImage/{id}', 'HomeController@addImageProfile');
Route::post('/profile/saveImage/{id}', 'HomeController@saveImageProfile');
Route::get('/profile/images/{id}', 'HomeController@userImages');
Route::get('/profile/image/{id}', 'HomeController@profileImage');