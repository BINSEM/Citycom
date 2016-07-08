@extends('layouts.main')

@section('content')

<div id="profile" class="ui segment" style="margin: auto; margin-top: 7rem;  background-color:white; width: 50%;">

	<form class="ui form" action="/profile/update/{{$user->id}}" method="POST">
		{{ csrf_field() }}
		<div class="field">
			<label>Nom</label>
			<input type="text" name="name" value="{{$user->name}}">
		</div>
		<div class="field">
			<label>Prénom</label>
			<input type="text" name="prenom" value="{{$user->prenom}}">
		</div>
		<div class="field">
			<label>Email</label>
			<input type="text" name="email" value="{{$user->email}}">
		</div>
		<div class="field">
			<label>Adresse</label>
			<input type="text" name="adresse" value="{{$user->adresse}}">
		</div>
		<div class="field">
			<label>Code postal</label>
			<input type="text" name="code_postal" value="{{$user->code_postal}}">
		</div>
		<div class="field">
			<label>Ville</label>
			<input type="text" name="ville" value="{{$user->ville}}">
		</div>
		<div class="field">
			<label>Numéro de téléphone</label>
			<input type="text" name="tel" value="{{$user->tel}}">
		</div>
		<button class="ui yellow button" type="submit">Valider</button>
	</form>
</div>
@endsection