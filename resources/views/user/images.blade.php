@extends('layouts.main')

@section('content')

@foreach($user->images as $img)
<div class="five wide column">
	<div class="ui grid">
		<div class="ui card">
			<div class="image">
				<img src="{{ $img->path }}">
			</div>
			<div class="content">
				<a class="header">Nom Prenom</a>
			</div>
		</div>
		<div class="ui center aligned extra content">
			<a href="/profile/image/{{$img->id}}" class="ui basic green button">Charger une image</a>
		</div>
	</div>
</div>
@endforeach
@endsection