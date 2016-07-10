<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|	 ajouter le 'middleware' => 'auth'
*/


Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin'], function () {
	Route::controller('/', 'Admin\Controller\AdminController');
});
Route::get('/magasin', function(){
	return 'Magasin';
});
Route::post('/panier', function(){
		$basket = array();
		if(session()->has('cart')){
			$cart = session()->get('cart');
			foreach ($cart as $key => $value) {
				array_push($basket, $value['id']);
			}
		}
		$detail = array();
		for ($i = 0; $i < count($basket); $i++){
			if(array_key_exists($basket[$i], $detail)){
				$detail[$basket[$i]]++;
			} else {
				$detail[$basket[$i]] = 1;
			}
		}
		$basket = implode(',', $basket);
		if(Auth::check()) {
			$user = Auth::user();
			$order = new Order;
			$order->user_id = $user->id;
			$order->commande = $basket;
			$order->save();
			session()->forget('cart');
		} else {
			session()->flash('message', 'Inscrivez vous pour poursuivre vos achats.');
			return redirect('/register');
		}
		return redirect('/commande');
	});
Route::get('/commande', function(){
	return view('order::confirmer');
});