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
use App\Product;
use App\Order;
use App\Deliver;
use App\Paiement;

Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin'], function () {
	Route::controller('/', 'Admin\Controller\AdminController');
});
Route::get('/magasin', function(){
	$products = Product::all();
	return view('home')->with(['products' => $products]);
});
Route::group(['middleware' => 'web'], function(){
	Route::get('/panier', function(){
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
		session()->put('current_basket', $basket);
		$products = array();
		$total = 0;
		foreach ($detail as $key => $value) {
			$product = Product::find($key);
			$product['qte'] = $value;
			$total += ($product['qte']*$product['prix']);
			array_push($products, $product);
		}
		if(Auth::check()){
			$user = Auth::user();
		} else {
			$user['id'] = 0;
		}
		$livraisons = Deliver::all();
		$paiements = Paiement::all();
		return view('order::panier')->with(['products' => $products, 'total' => number_format($total, 2, '.', ' '), 'user' =>$user, 'livraisons' => $livraisons, 'paiements' => $paiements]);
	});
	Route::post('/panier', function(){
		if(session()->has('current_basket')){
			$basket = session()->get('current_basket');
		} else {
			$basket = '0';
		}
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
		if(Auth::check()){
			return view('order::commande');
		} else {
			return redirect('/');
		}
	});

});