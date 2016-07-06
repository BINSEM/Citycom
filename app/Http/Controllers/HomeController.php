<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function profile(Request $request, $id)
    {
        $user = User::find($id);
        return view('user.profile', ['user' => $user]);
    }

    public function editProfile()
    {

        return view('home');
    }

    public function updateProfile()
    {
        return view('home');
    }
}
