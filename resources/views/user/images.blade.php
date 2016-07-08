@extends('layouts.main')

@section('content')

<div id="adresse" class="ui grid" style="margin-top:6.5rem; width: 95%; margin-left: auto; margin-right: auto;">
	<div class="doubling four column row">
		@foreach($user->images as $img)
		<div class="four wide column" style="margin-bottom: 1rem">
			<div class="ui card">
				<div class="content">
					<a href="/profile/image/{{$img->id}}" class="ui basic green button">Faire profil l'image </a>
				</div>
				<div class="image">
					<img src="{{ $img->path }}" style="height: 180px;">
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>

@endsection