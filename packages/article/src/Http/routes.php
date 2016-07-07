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
// chemin à la racine vers la vue de la liste des articles
Route::get('/', 'Article\Controller\ProductController@listProduct');
// Liste des articles enregistées
Route::get('/listeArticles', 'Article\Controller\ProductController@listProduct');
// engistrer un nouvel article
Route::get('/ajoutArticle', function(){
	return view('article::ajoutArticle');
});
// enregistrement d'un article dans la base de données
Route::post('/nouvelArticle','Article\Controller\ProductController@postProduct');
// récupérer les données d'un articles
Route::get('/nouvelArticle/{id}', 'Article\Controller\ProductController@getProduct');

Route::get('/vueArticle/{id}', 'Article\Controller\ProductController@getProduct');
// vue d'édition d'un article
Route::get('/editerArticle/{id}','Article\Controller\ProductController@editProduct');
// modification d'un article
Route::post('/vueArticle/{id}','Article\Controller\ProductController@updateProduct');
// Suppression d'un article (sauf dans la base données)
Route::get('/suppressionArticle/{id}', 'Article\Controller\ProductController@deleteProduct');