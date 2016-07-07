<?php

namespace Admin\Controller;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\User;
use App\Order;

use App\Http\Requests;

class AdminController extends Controller
{
    public function getIndex() {
    	//
        return view('admin::main');
    }

    public function getUsers($id = 0) {
    	//
    	if (!$id) {
    		$users = User::all();
    		return view('admin::users')->with(['users' => $users]);
    	} else {
    		$user = User::find($id)?User::find($id):'Utilisateur n° '.$id.' inexistant';
    		return view('admin::user')->with(['user' => $user]);
    	}
    }

    public function deleteUser(Request $req) {
    	$user = User::find($req->input('id'));
    	$user->delete();
    	return redirect('/admin/users');
    }

    public function getCommandes($id) {
    	if (!$id) {
    		$commandes = Order::all();
    		return view('admin::commandes')->with(['commandes' => $commandes]);
    	}
    }

    public function updateCommand(Request $req) {
    	$commande = Order::find($req->input('id'));
    	$commande->statut = $req->input('statut');
    	$commande->save();
    	return redirect('/admin/commandes');
    }
}
