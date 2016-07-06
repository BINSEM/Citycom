<?php

namespace Order\Controller;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Http\Requests;

class OrderController extends Controller
{
    public function getIndex() {
    	//
        return view('home');
    }
}
