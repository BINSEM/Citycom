@extends('article::main')
@section('content')
<!-- champ détail de l'article -->

<div class="ui centered internally celled grid">
	<div class="row">
		<div class="three wide column">
			<div class="ui medium rounded image">
				<img width="300" src="/images/{{$article->img}}">
				<h1>{{$article->nom}}</h1>
				<a href="/editerArticle/{{$article->id}}"><button class="ui blue button"><i class="edit icon"></i>Modifier</button></a>
				<a href="/supprimer/{{$article->id}}"><button class="ui button red"><i class="delete icon"></i>Supprimer</button></a>
			</div>
		</div>
		<div class="five wide column" style="background-color: rgba(205, 205, 205, 0.2);">
			<h4>{{$article->description}}</h4>
		</div>
		<div class="three wide column" style="font-size:1.4em; line-height: 1.4;">
			<div class="meta">
				Identifiant: {{$article->id}}
			</div>
			<div class="meta">
				Référence: {{$article->ref}}
			</div>
			<div class="meta">
				Prix: {{$article->prix}}
			</div>
			<div class="meta">
				Type: {{$article->type}}
			</div>
			<div class="meta">
				Couleur: {{$article->couleur}}
			</div>
			<div class="meta">
				Stock: {{$article->stock}}
			</div>
		</div>
	</div>

	@endsection