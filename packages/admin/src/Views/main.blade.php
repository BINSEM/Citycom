@extends('admin::layout')

@section('content')

<h1>Paneau de l'Administrateur</h1>
<ul>
	<li><a href="/admin/users">Gestion des utilisateurs</a></li>
	<li><a href="/admin/categories">Ajouter/Supprimer des catégories</a></li>
	<li><a href="/admin/articles">Ajouter/Supprimer des articles</a></li>
	<li><a href="/admin/paiements">Ajouter/Supprimer des moyens de paiement</a></li>
	<li><a href="/admin/livraisons">Ajouter/Supprimer des modes de livraison</a></li>
	<li><a href="/admin/commandes">Suivi des commandes</a></li>
</ul>

@endsection
