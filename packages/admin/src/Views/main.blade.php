@extends('admin::layout')

@section('content')

<div class="ui sixteen wide column">
	<h1 class="ui centered header">Paneau de l'Administrateur</h1>
</div>

<div class="ui four wide centered column">
	<ul class="ui relaxed centered list">
		<div class="item"><a href="/admin/users">Gestion des utilisateurs</a></div>
		<div class="item"><a href="/admin/categories">Ajouter/Supprimer des catégories</a></div>
		<div class="item"><a href="/article">Ajouter/Supprimer des articles</a></div>
		<div class="item"><a href="/admin/paiements">Ajouter/Supprimer des moyens de paiement</a></div>
		<div class="item"><a href="/admin/livraisons">Ajouter/Supprimer des modes de livraison</a></div>
		<div class="item"><a href="/admin/commandes">Suivi des commandes</a></div>
	</ul>
</div>

@endsection
