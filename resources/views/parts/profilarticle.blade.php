@extends('layout.main')
@section('content')

<!-- @include('parts.header') -->


<h1>{{$article->nom}}</h1>

<div class="ui centered internally celled grid">
	<div class="row">
		<div class="three wide column">
			<div class="ui card">
				<div class="ui medium image">
					<img width="250" src="/images/{{$article->img}}">
				</div>
				<div class="content">
					<a class="header">Beau Caillou</a>
				</div>
			</div>
		</div>
		<div class="height wide column">
			<p>{{$article->description}}</p>
		</div>
		<div class="three wide column">
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
				Catégorie: {{$article->categorie}}
			</div>
			<div class="meta">
				Stock: {{$article->stock}}
			</div>
		</div>
	</div>
	<div class="ui fluid yellow button">
	<a href="/addcart/{{$article->id}}"><i class="shop icon"></i>Ajouter au panier</a>
	</div>
<!-- 			<div class="ui button">
				<a href="/editerArticle/{{$article->id}}">Modifier</a>
			</div> -->