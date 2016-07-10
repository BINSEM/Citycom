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


// Route::get('/', function () {
// 	return view('home');
// });

Route::auth();

 /* ---------------------------------------------
 CartController
 ---------------------------------------------*/

 Route::group(['middleware'=>'web'], function(){
 	Route::get('/', 'CartController@index');
 	Route::get('/cart/test', 'CartController@index');
 	Route::get('/cart', 'CartController@showCart');
 	Route::post('/cart/post/{id}', 'CartController@postCart');
 	Route::post('/cart/delete', 'CartController@deleteCart');
 	Route::get('/profilarticle/{id}', 'CartController@showProfile');
 	Route::post('/cart/command', 'CartController@cartCommand');
 	Route::get('/cart/profilarticle/{id}', 'CartController@showProfile');
 });

/* ---------------------------------------------
 HomeController
 ---------------------------------------------*/

 Route::get('/home', 'HomeController@index');
 Route::get('/profile', 'HomeController@profile');
 Route::get('/profile/edit/{id}', 'HomeController@editProfile');
 Route::post('/profile/update/{id}', 'HomeController@updateProfile');
 Route::get('/profile/addImage/{id}', 'HomeController@addImageProfile');
 Route::post('/profile/saveImage/{id}', 'HomeController@saveImageProfile');
 Route::get('/profile/images/{id}', 'HomeController@userImages');
 Route::get('/profile/image/{id}', 'HomeController@profileImage');
 Route::get('/orders', 'HomeController@orders');
 Route::get('/contact', 'HomeController@contact');

/* ---------------------------------------------
 AdresseController
 ---------------------------------------------*/

 Route::get('/adresses', 'AdresseController@index');
 Route::post('/adresseStore', 'AdresseController@adresseStore');
 Route::get('/adresse/add', 'AdresseController@adresseAdd');
 Route::get('/adresse/edit/{id}', 'AdresseController@editAdresse');
 Route::post('/adresse/update/{id}', 'AdresseController@updateAdresse');


 /* ---------------------------------------------
 Controller
 ---------------------------------------------*/
