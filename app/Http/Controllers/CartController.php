<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Product;
use App\Order;

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
		return view('cart.index', ['carts' => $carts , 'products' => $products, 'total' => $total]);
	}

	public function postCart(Request $request, $id)
	{
		$product = Product::find($id)->toArray();
		$request->session()->push('cart', $product);
		return redirect('/cart/test');
	}

	public function deleteCart(Request $request)
	{
		$request->session()->forget('cart');
		return redirect('/cart/test');
	}
}
