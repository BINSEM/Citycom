<?php

namespace Article\Controller;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Http\Requests;

class ProductController extends Controller
{
    public function getIndex() {
    	//
        return view('article::ajoutArticle');
    }
}
