@extends('layouts.main')

@section('content')

<div id="adresse" class="ui grid" style="margin-top:6.5rem; width: 95%; margin-left: auto; margin-right: auto;">
	@foreach($user->images as $img)
	<div class="four wide column">
		<div class="ui card">
			<div class="content">
				<a href="/profile/image/{{$img->id}}" class="ui basic green button">Faire profil l'image </a>
			</div>
			<div class="image">
				<img src="{{ $img->path }}">
			</div>
			<div class="content">
				<h2 class="header">{{$user->name}} {{$user->prenom}}</h2>
			</div>
		</div>
	</div>
	@endforeach
</div>

@endsection