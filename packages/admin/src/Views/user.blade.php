@extends('admin::layout')

@section('content')

<div class="ui fifteen wide centered column">
<h2>Détails de l'utilisateur</h2>

@if(isset($user->id))
<form method="post" action="/admin/user">
	{{csrf_field()}}
	{{method_field('DELETE')}}
	<input type="hidden" name="id" value="{{$user->id}}" />
	<button class="ui button" type="submit">Supprimer</button>
</form>
</div>
<div class="ui ten wide centered column">
	<div class="ui padded card">
		<h3>ID: {{$user->id}} </h3>
		<h3>Pseudo: {{$user->name}} </h3>
		<h3>Nom: {{$user->nom}} </h3>
		<h3>Prénom: {{$user->prenom}} </h3>
		<h3>E-mail: {{$user->email}} </h3>
		<h3>Adresse: {{$user->adresse}}</h3>
		<h3>Ville: {{$user->ville}}</h3>
		<h3>Code Postal: {{$user->code_postal}}</h3>
	</div>
</div>	

@else
</div>
<h3>{{$user}}</h3>

@endif

@endsection