@extends('layouts.main')

@section('content')

<div id="adresse" class="ui centered grid" style="margin-top:6.5rem;">
	<a href="/adresse/add" class="ui basic black button">Ajouter l'adresse</a>
	<div class="three centered column row">
		@foreach($adresses as $adresse)
		<div class="four wide column">
			<div class="ui grid">
				<div class="ui row">
					<div class="column">
						<div class="ui segment" style="margin:0.5rem;"">
							<h4>Informations de adresse</h4>
							<div class="ui divider"></div>
							<p>Nom : <b>{{$adresse->nom}}</b></p>
							<p>Prenom : <b>{{$adresse->prenom}}</b></p>
							<p>Adress : <b>{{$adresse->adresse}}</b></p>
							<p>Code postal : <b>{{$adresse->code_postal}}</b></p>
							<p>Ville : <b>{{$adresse->ville}}</b></p>
							<p>Tel : <b>{{$adresse->tel}}</b></p>
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