@extends('layouts.main')

@section('content')

<form class="ui form" action="/adresse/update/{{$adresse->id}}" method="POST">
	{{ csrf_field() }}
	<div class="field">
		<label>Nom</label>
		<input type="text" name="nom" value="{{$adresse->nom}}">
	</div>
	<div class="field">
		<label>Prenom</label>
		<input type="text" name="prenom" value="{{$adresse->prenom}}">
	</div>
	<div class="field">
		<label>Email</label>
		<input type="text" name="email" value="{{$adresse->email}}">
	</div>
	<div class="field">
		<label>Adresse</label>
		<input type="text" name="adresse" value="{{$adresse->adresse}}">
	</div>
	<div class="field">
		<label>Code postal</label>
		<input type="text" name="code_postal" value="{{$adresse->code_postal}}">
	</div>
	<div class="field">
		<label>Ville</label>
		<input type="text" name="ville" value="{{$adresse->ville}}">
	</div>
	<div class="field">
		<label>Tel</label>
		<input type="text" name="tel" value="{{$adresse->tel}}">
	</div>
	<button class="ui button" type="submit">Submit</button>
</form>
@endsection