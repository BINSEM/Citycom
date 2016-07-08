@extends('layouts.main')

@section('content')

<div id="profile" class="ui centered grid" style="margin: auto; margin-top: 6.5rem; left: 50%; background-color:white; width: 50%;">

	<div class="ui image" style="margin-top:1rem;">
		<img class="ui medium circular image" src="{{ $user->avatar->path or Gravatar::get(Auth::user()->email) }}">
		<h2 class="header">{{$user->prenom}} {{$user->name}}</h2>
	</div>

	<div class="ui styled accordion" style="margin-top:1rem;">
		<div class="active title">
			<i class="dropdown icon"></i>
			INFORMATIONS DE FROFIL
		</div>
		<div class="content">
			<p>Nom : {{$user->name}}</p>
			<p>Prénom : {{$user->prenom}}</p>
			<p>Adresse : {{$user->adresse}}</p>
			<p>Code postal : {{$user->code_postal}}</p>
			<p>Ville : {{$user->ville}}</p>
			<p>Numéro de Téléphone : {{$user->tel}}</p>
			<p>Email : {{$user->email}}</p>
			<a href="/profile/edit/{{$user->id}}">Editer le profil</a>
		</div>
		<div class="title">
			<i class="dropdown icon"></i>
			MES ADRESSES
		</div>
		<div class="content">
			<a href="/adresse/add" class="ui basic black button">Ajouter une adresse</a>
			<div class="accordion transition hidden">
				<div class="accordion">
					@if(count($user->adresses) > 0)
					@foreach($adresses as $adresse)
					<div class="title">
						<i class="dropdown icon"></i>
						{{$adresse->nom}}
					</div>
					<div class="content">
						<div class="ui divider"></div>
						<p>Nom : <b>{{$adresse->nom}}</b></p>
						<p>Prenom : <b>{{$adresse->prenom}}</b></p>
						<p>Adress : <b>{{$adresse->adresse}}</b></p>
						<p>Code postal : <b>{{$adresse->code_postal}}</b></p>
						<p>Ville : <b>{{$adresse->ville}}</b></p>
						<p>Tel : <b>{{$adresse->tel}}</b></p>
						<p>Email : <b>{{$adresse->email}}</b></p>
						<a href="">Choisir une adresse</a>
					</div>
					@endforeach
					@endif
				</div>
			</div>
		</div>
		<div class="title">
			<i class="dropdown icon"></i>
			HISTORIQUE ET SUIVI DES ACHATS
		</div>
		<div class="content">
			<p>----------------</p>
			<p>----------------</p>
		</div>
	</div>


	<div class="ui grid" style="margin-top: 1rem;">
		<div class="ui row">
			<div class="column">
				<div class="ui center aligned extra content">
					<a href="/profile/addImage/{{$user->id}}" class="ui yellow button">Choisir une image de profil</a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

<script type="text/javascript">
	$('.ui.styled.accordion').accordion();
</script>