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

Route::group(['prefix' => 'article'], function () {
	Route::controller('/', 'Article\Controller\ProductController');
});

Route::get('/', function () {
    return view('article::ajoutArticle');
});
// enregistrement d'un article dans la base de données
Route::post('/nouvelArticle','Article\Controller\ProductController@postProduct');
// récupérer les données d'un articles
Route::get('/nouvelArticle/{id}', 'Article\Controller\ProductController@getProduct');
// modification d'un article
Route::get('/editerArticle/{id}','Article\Controller\ProductController@editProduct');

Route::post('/updateArticle/{id}','Article\Controller\ProductController@updateProduct');
