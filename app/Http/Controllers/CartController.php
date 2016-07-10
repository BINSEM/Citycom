<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Product;
use App\Order;

use App\Http\Requests;

class CartController extends Controller
{
	public function index()
	{
		$produ = Product::all();
		$products = \Session::get('cart', $produ);
		return view('cart.index',compact('products'));
	}
}
