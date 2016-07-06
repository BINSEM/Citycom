<?php

namespace Admin\Controller;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Http\Requests;

class AdminController extends Controller
{
    public function getIndex() {
    	//
        return view('admin::main');
    }
}
