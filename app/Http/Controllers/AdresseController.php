<?php

namespace App\Http\Controllers;

use Auth;
use App\Adresse;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdresseController extends Controller
{
	public function index()
	{
		$user = Auth::user();
		$adresses = $user->adresses->all();
		return view('adresse.index', ['adresses' => $adresses]);
	}

	public function adresseAdd()
	{
		return view('adresse.add');
	}

	public function adresseStore(Request $request)
	{
		$this->validate($request, [
			'nom' => 'required|max:255',
			'prenom' => 'required',
			'email' => 'required',
			'adresse' => 'required',
			'code_postal' => 'required',
			'ville' => 'required',
			'tel' => 'required',
			]);
		Auth::user()->adresses()->create([
			'nom' => $request->nom,
			'prenom' => $request->prenom,
			'email' => $request->email,
			'adresse' => $request->adresse,
			'code_postal' => $request->code_postal,
			'ville' => $request->ville,
			'tel' => $request->tel,
			]);
		return redirect('/adresses');
	}

	public function editAdresse(Request $request, $id)
	{
		$adresse = Adresse::find($id);
		return view('adresse.edit', ['adresse' => $adresse]);
	}

	public function updateAdresse(Request $request, $id)
	{
		$adresseUpdate = $request->all();
		$adresse = Adresse::find($id);
		$adresse->update($adresseUpdate);
		return redirect('/adresses');
	}
}
