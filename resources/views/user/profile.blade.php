@extends('layouts.main')

@section('content')

<div id="profile" class="ui centered grid">
	<div class="two column row">
		<div class="ten wide column">
			<div class="ui grid">
				<div class="ui row">
					<div class="column">
						<h4>Informations de profil</h4>
						<div>
							<p>Nom : {{$user->name}}</p>
							<p>Prenom : {{$user->prenom}}</p>
							<p>Adress : {{$user->adresse}}</p>
							<p>Code postal : {{$user->code_postal}}</p>
							<p>Ville : {{$user->ville}}</p>
							<p>Tel : {{$user->tel}}</p>
							<a href="/profile/edit/{{$user->id}}">edit</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="five wide column">
			<div class="ui grid">
				<div class="ui card">
					<div class="image">
						<img src="{{ $user->avatar->path or Gravatar::get(Auth::user()->email) }}">
					</div>
					<div class="content">
						<a class="header">Nom Prenom</a>
					</div>
				</div>
				<div class="ui center aligned extra content">
					<a href="/profile/addImage/{{$user->id}}" class="ui basic green button">Charger une image</a>
					<a href="/profile/images/{{$user->id}}" class="ui basic blue button">Images</a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection