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
    return view('article.ajoutArticle');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/profile/{id}', 'HomeController@profile');
Route::get('/profile/edit/{id}', 'HomeController@editProfile');
Route::get('/profile/update/{id}', 'HomeController@updateProfile');