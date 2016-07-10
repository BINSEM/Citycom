@extends('layouts.main')

@section('content')

<div id="profile_images" class="ui centered grid">
	<h2>Vos images de profil</h2>
	<div class="doubling four column row">
		@foreach($user->images as $img)
		<div class="four wide column">
			<div class="ui card">
				<div class="image">
					<img src="{{ $img->path }}">
				</div>
			</div>
			<a href="/profile/image/{{$img->id}}" class="ui yellow button">Mettre cette image en profil</a>
		</div>
		@endforeach
	</div>
</div>

@endsection