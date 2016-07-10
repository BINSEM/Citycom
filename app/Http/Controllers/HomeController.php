<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Image;
use Carbon\Carbon;

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

    public function profile()
    {
        $user = Auth::user();
        if(count($user->adresses) > 0){
            $adresses = $user->adresses->all();
            return view('user.profile', ['user' => $user, 'adresses' => $adresses]);
        }
        else{
            return view('user.profile', ['user' => $user]);
        }
    }

    public function editProfile(Request $request, $id)
    {
        $user = User::find($id);
        return view('user.edit', ['user' => $user]);
    }

    public function updateProfile(Request $request, $id)
    {
        $userUpdate = $request->all();
        $user = User::find($id);
        $user->update($userUpdate);
        return redirect('/profile');
    }

    public function addImageProfile(Request $request, $id)
    {
        $user = User::find($id);
        return view('user.addImage', ['user' => $user]);
    }

    public function saveImageProfile(Request $request, $id)
    {
        $user = User::find($id);
        $image = new Image;
        $image->path = $request->path;
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $name = $timestamp. '-' .$file->getClientOriginalName();
            $image->path = '/images/' . $name;
            $file->move(public_path().'/images/', $name);
        }
        $user->images()->save($image);
        return redirect('/profile/images/'.$request->user()->id);
    }

    public function userImages(Request $request, $id)
    {
        $user = User::find($id);
        return view('user.images', ['user' => $user]);
    }

    public function profileImage(Request $request, $id)
    {
        $user = Auth::user();
        $image = $user->images()->where('id', $id)->first();
        $user->avatar_id = $image->id;
        $user->save();
        return redirect('/profile');
    }

    // -------------------------Orders---------------------------

    public function orders()
    {
        $user = Auth::user();
        $orders = $user->orders->all();
        return view('user.orders', ['orders' => $orders]);
    }
}
