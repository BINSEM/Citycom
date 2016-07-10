<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Product;
use App\Order;
use App\Cart;

use App\Http\Requests;

class CartController extends Controller
{
	public function index(Request $request)
	{
		$products = Product::all();
		$carts = $request->session()->get('cart');
		if(count($carts) > 0){
			$sum = [];
			foreach($carts as $cart) {
				array_push($sum, $cart['prix']);
			}
			$total = array_sum($sum);
			$carts = json_encode(count($carts));
		}else{
			$total = 0;
			$carts = 'panier vide';
		}
		return view('home', ['carts' => $carts , 'products' => $products, 'total' => $total]);
	}

	public function postCart(Request $request, $id)
	{
		$product = Product::find($id)->toArray();
		$request->session()->push('cart', $product);
		return redirect('/');
	}

	public function deleteCart(Request $request)
	{
		$request->session()->forget('cart');
		return redirect('/');
	}

	public function showCart(Request $request)
	{
		$carts = $request->session()->get('cart');
		// $objects = new Cart();
		$sum = [];

		if(count($carts) > 0){
			foreach ($carts as $cart => $value) {
				$cart = $value;
				array_push($sum, $cart['prix']);
			}
			$total = array_sum($sum);
		}else{
			$total = 0;
			$carts = [];
		}
		return view('cart.show', ['carts' => $carts , 'total' => $total]);
	}
}
