@extends('layouts.main')

@section('content')

<form class="ui form" action="/profile/update/{{$user->id}}" method="POST">
	{{ csrf_field() }}
	<div class="field">
		<label>Nom</label>
		<input type="text" name="nom" value="{{$user->nom}}">
	</div>
	<div class="field">
		<label>Prenom</label>
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
		<label>Tel</label>
		<input type="text" name="tel" value="{{$user->tel}}">
	</div>
	<button class="ui button" type="submit">Submit</button>
</form>
@endsection