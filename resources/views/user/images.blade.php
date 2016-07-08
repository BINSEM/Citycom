@extends('layouts.main')

@section('content')

<div id="adresse" class="ui centered grid" style="margin-top:6.5rem; width: 95%; margin-left: auto; margin-right: auto;">
	<h2>Vos images de profil</h2>
	<div class="doubling four column row">
		@foreach($user->images as $img)
		<div class="four wide column" style="margin-bottom: 1rem">
			<div class="ui card">
				<div class="image">
					<img src="{{ $img->path }}" style="height: 180px;">
				</div>
			</div>
			<a href="/profile/image/{{$img->id}}" class="ui yellow button">Mettre cette image en profil</a>
		</div>
		@endforeach
	</div>
</div>

@endsection