@extends('admin::layout')

@section('content')

<div class="ui sixteen wide column">
	<h1 class="ui centered header">Paneau de l'Administrateur</h1>
</div>

<div class="ui ten wide centered column">
	<ul class="ui centered list">
		<li><a href="/admin/users">Gestion des utilisateurs</a></li>
		<li><a href="/admin/categories">Ajouter/Supprimer des catégories</a></li>
		<li><a href="/article">Ajouter/Supprimer des articles</a></li>
		<li><a href="/admin/paiements">Ajouter/Supprimer des moyens de paiement</a></li>
		<li><a href="/admin/livraisons">Ajouter/Supprimer des modes de livraison</a></li>
		<li><a href="/admin/commandes">Suivi des commandes</a></li>
	</ul>
</div>

@endsection
