@extends('article::main')
@section('content')
<!-- champ détail de l'article -->
<h1>{{$articleSup->nom}}</h1>

<div class="ui centered internally celled grid">
	<div class="row">
		<div class="three wide column">
			<div class="ui medium rounded image">
				<img width="250" src="/images/{{$articleSup->img}}">
			</div>
		</div>
		<div class="height wide column">
			<p>{{$articleSup->description}}</p>
		</div>
		<div class="three wide column">
			<div class="meta">
				Identifiant: {{$articleSup->id}}
			</div>
			<div class="meta">
				Référence: {{$articleSup->ref}}
			</div>
			<div class="meta">
				Prix: {{$articleSup->prix}}
			</div>
			<div class="meta">
				Type: {{$articleSup->type}}
			</div>
			<div class="meta">
				Catégorie: {{$articleSup->couleur}}
			</div>
			<div class="meta">
				Stock: {{$articleSup->stock}}
			</div>
		</div>
	</div>
			<div class="ui button red">
				<a href="/suppression/{{$articleSup->id}}"><i class="delete icon"></i>Supprimer</a>
			</div>
			<div class="ui button">
				<a href="/editerArticle/{{$articleSup->id}}">Modifier</a>
			</div>
			@endsection