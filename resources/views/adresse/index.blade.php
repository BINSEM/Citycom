@extends('layouts.main')

@section('content')

<div id="adresse" class="ui centered grid">
	<a href="/adresse/add" class="ui basic black button">Add adresse</a>
	<div class="three column row">
		@foreach($adresses as $adresse)
		<div class="four wide column">
			<div class="ui grid">
				<div class="ui row">
					<div class="column">
						<h4>Informations de profil</h4>
						<div>
							<p>Nom : {{$adresse->nom}}</p>
							<p>Prenom : {{$adresse->prenom}}</p>
							<p>Adress : {{$adresse->adresse}}</p>
							<p>Code postal : {{$adresse->code_postal}}</p>
							<p>Ville : {{$adresse->ville}}</p>
							<p>Tel : {{$adresse->tel}}</p>
							<a href="/adresse/edit/{{$adresse->id}}">edit</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>

@endsection