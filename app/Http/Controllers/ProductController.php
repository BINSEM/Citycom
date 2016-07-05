<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;

class ProductController extends Controller
{
    public function postProduct(Request $req){
    	$article = new Product;
    	$article->nom =  $req->input('nom');
    	$article->description = $req->input('description');
    	$article->prix = $req->input('prix');
    	$article->ref = $req->input('ref');
    	$article->stock = $req->input('stock');
    	$article->img = $req->input('img');
    	$article->save();
    }
}