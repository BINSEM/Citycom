@extends('layouts.main')

@section('content')

<form class="ui form" action="/adresseStore" method="POST">
	{{ csrf_field() }}
	<div class="field">
		<label>Nom</label>
		<input type="text" name="nom" placeholder="Nom">
	</div>
	<div class="field">
		<label>Prenom</label>
		<input type="text" name="prenom" placeholder="Prenom">
	</div>
	<div class="field">
		<label>Email</label>
		<input type="text" name="email" placeholder="Email">
	</div>
	<div class="field">
		<label>Adresse</label>
		<input type="text" name="adresse" placeholder="Adresse">
	</div>
	<div class="field">
		<label>Code postal</label>
		<input type="text" name="code_postal" placeholder="Code postal">
	</div>
	<div class="field">
		<label>Ville</label>
		<input type="text" name="ville" placeholder="Ville">
	</div>
	<div class="field">
		<label>Tel</label>
		<input type="text" name="tel" placeholder="Tel">
	</div>
	<button class="ui button" type="submit">Submit</button>
</form>

@endsection