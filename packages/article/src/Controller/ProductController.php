<?php

namespace Article\Controller;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Product;
use App\Http;
use App\Http\Requests;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductController extends Controller
{
    public function getIndex() {
    	//
        return view('article::ajoutArticle');
    }

    public function postProduct(Request $req){
    	$article = new Product;
    	$article->nom =  $req->input('nom');
    	$article->description = $req->input('description');
    	$article->prix = $req->input('prix');
        $article->ref = $req->input('ref');
        $article->categorie = $req->input('categorie');
        $article->stock = $req->input('stock');
        $article->img = $req->input('img');
        $article->save();
        return redirect('nouvelArticle/'.$article->id);
    }

    public function getProduct(Request $req, $id){
        $article = Product::find($id);
        return view('article::vueArticle', ['article'=> $article]);
    }

    public function editProduct(Request $req, $id){
        $article = Product::find($id);
        return view('article::editerArticle', ['article' => $article]);
    }

    public function updateProduct(Request $req, $id){
        $articleUpdate = $req->except('_token');
        $article = Product::find($id);
        $article->update($articleUpdate);
        return view('article::vueArticle', ['article'=> $article]);
    }

    public function deleteProduct(Request $req, $id){
        $article = Product::find($id);
        $article->SoftDeletes();
        return view('article::listeArticle');

    } 

    public function listProduct(Request $req){
        $articles = Product::all();
        return view('article::listeArticles')->with(['articles'=> $articles]);
    }
}
