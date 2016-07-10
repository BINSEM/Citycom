@extends('layout.main')
@section('content')

<!-- @include('parts.header') -->


<h1>{{$article->nom}}</h1>

<div class="ui centered internally celled grid">
	<div class="row">
		<div class="three wide column">
			<div class="ui card">
				<div class="ui medium image">
					<img width="250" src="/images/{{$product->img}}">
				</div>
				<div class="content">
					<a class="header">Beau Caillou</a>
				</div>
			</div>
		</div>
		<div class="height wide column">
			<p>{{$product->description}}</p>
		</div>
		<div class="three wide column">
			<div class="meta">
				Identifiant: {{$product->id}}
			</div>
			<div class="meta">
				Référence: {{$product->ref}}
			</div>
			<div class="meta">
				Prix: {{$product->prix}}
			</div>
			<div class="meta">
				Catégorie: {{$product->categorie}}
			</div>
			<div class="meta">
				Stock: {{$product->stock}}
			</div>
		</div>
	</div>
	<div class="ui fluid yellow button">
	<a href="/cart/post/{{$product->id}}"><i class="shop icon"></i>Ajouter au panier</a>
	</div>
<!-- 			<div class="ui button">
				<a href="/editerArticle/{{$article->id}}">Modifier</a>
			</div> -->