@extends('layouts.main')

@section('content')
<style type="text/css" media="screen">
	#profile{
		margin-top: 2rem;
	}
	.ui.link.list .item{
		color: blue !important;
		margin: 0.3rem 0 0.3rem 1rem;
	}
	.ui.teal.header{
		text-align: center;
		margin-top: 0.3rem;
	}
	#segment1{
		margin-top: 0.3rem;
		background-color: #58D3F7;
	}
	#segment2{
		margin-top: 0.3rem;
		background-color: #58D3F7;
	}
	#segment3{
		margin-top: 0.3rem;
		background-color: #58D3F7;
	}
	.ui.segments>.ui.segments{
		background-color: white;
	}
	#segment2 form{
		width: 93%;
		margin-right: auto;
		margin-left: auto;
		margin-bottom: 0.5rem;
	}
	@media only screen and (max-width: 767px){
		.ui.stackable.two.column.row .column{
			padding: 0 1rem !important;
		}
	}
</style>

<div id="profile" class="ui centered grid">
	<div class="two column row">
		<div class="ten wide column">
			<div class="ui grid">
				<div class="ui stackable two column row">
					<div class="column">
						<div id="segment1" class="ui segments">
							<div class="content">
								<h2 class="ui teal header">Liste des catégories</h2>
							</div>
							<div class="ui segments">
								<div class="ui link list">
									<a href="" class="item">blabla</a>
									<a href="" class="item">blabla</a>
									<a href="" class="item">blabla</a>
								</div>
							</div>
						</div>
						<div id="segment2" class="ui segments">
							<div class="content">
								<h2 class="ui teal header">Connection</h2>
							</div>
							<div class="twelve wide column">
								<form class="ui form">
									<div class="field">
										<input type="text" name="nom" placeholder="Nom">
									</div>
									<div class="field">
										<input type="text" name="mdp" placeholder="Mdp">
									</div>
									<button class="ui button" type="submit">Singin</button>
								</form>
							</div>
						</div>
						<div id="segment3" class="ui segments">
							<div class="content">
								<h2 class="ui teal header">FAQ</h2>
							</div>
							<div class="ui segments">
								<div class="ui link list">
									<a href="" class="item">blabla</a>
								</div>
							</div>
						</div>
					</div>
					<div class="column">
						<h4>Informations de profil</h4>
						<div>
							<p>Nom : {{$user->nom}}</p>
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
					<a class="ui basic green button">Charger une image</a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection