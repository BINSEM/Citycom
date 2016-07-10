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
        $article->categorie = $req->input('type');
        $article->categorie = $req->input('couleur');
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
        $article = Product::find($id)->update()->save();
        return view('article::vueArticle', ['article'=> $article]);
    }

    public function deleteProduct(Request $req, $id){
        $article = Product::find($id);
        $articles = Product::all();
        $article->delete();
        return redirect('/listeArticles')->with(['articles' => $articles, 'article' => $article]);

    } 

    public function listProduct(Request $req){
        $articles = Product::all();
        return view('article::listeArticles')->with(['articles'=> $articles]);
    }

    public function listDelete(Request $req){
        $articlesSup = Product::onlyTrashed()->get();
        return view('article::articlesSupprimes')->with(['articlesSup' => $articlesSup]);
    }

    public function productDeleted(Request $req, $id){
        $articleSup = Product::onlyTrashed()->where('id', $id)->first();
        return view('article::articleSup')->with(['articleSup' => $articleSup]);
    }

    public function productRestore(Request $req, $id){
        $articleSup = Product::withTrashed()->where('id', $id)->first()->restore();
        $articles = Product::all();
        return view('article::listeArticles')->with(['articles' => $articles]);
    }

    public function deleteDef(Request $req, $id){
        $article = Product::withTrashed()->where('id', $id)->forceDelete();
        return redirect('/articlesSupprimes');
    }
}
