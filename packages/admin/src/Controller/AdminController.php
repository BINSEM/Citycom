<?php

namespace Admin\Controller;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\User;
use App\Order;
use App\Deliver;

use App\Http\Requests;

class AdminController extends Controller
{
	private $statuses = ['payé', 'en traitement', 'en cours de livraison', 'livrée', 'annulé', 'remboursé'];

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

    public function getCommandes() {
		$commandes = Order::all();
		return view('admin::commandes')->with(['commandes' => $commandes, 'statuses' => $this->statuses]);
    }

    public function putCommand(Request $req) {
    	$commande = Order::find($req->input('id'));
    	$commande->statut = $req->input('statut');
    	$commande->save();
    	return redirect('/admin/commandes');
    }

    public function getLivraisons() {
    	$livraisons = Deliver::all();
    	return view('admin::livraisons')->with(['livraisons' => $livraisons]);
    }

    public function postLivraisons(Request $req) {
    	$deliver = $req->except('_token');
    	Deliver::create($deliver);
    	return redirect('/admin/livraisons');
    }

    public function putLivraisons(Request $req) {
    	$deliver = Deliver::find($req->input('id'));
    	$deliver->type = $req->input('type');
    	$deliver->description = $req->input('description');
    	$deliver->montant = $req->input('montant');
    	$deliver->condition = $req->input('condition');
    	$deliver->save();
    	return redirect('/admin/livraisons');
    }

    public function deleteLivraisons(Request $req) {
    	$livraison = Deliver::find($req->input('id'));
    	$livraison->delete();
    	return redirect('/admin/livraisons');
    }
}
