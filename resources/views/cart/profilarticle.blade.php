@extends('layouts.main')
@section('content')

<!-- @include('parts.header') -->


<h1>{{$product->nom}}</h1>

<div class="ui centered internally celled grid">
	<div class="row">
		<div class="three wide column">
			<div class="ui card">
				<div class="ui medium image">
					<img width="250" src="/images/{{$product->img}}" style="height: 30%;">
				</div>
				<div class="content">
					<a class="header">{{$product->nom}}</a>
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
	<form action="/cart/post/{{$product->id}}" method="post">
		{{ csrf_field() }}

		<button type="submit" formaction="/cart/post/{{$product->id}}" formmethod="post" class="ui yellow tiny labeled icon button"><i class="shop icon"></i>Ajouter au panier</button>			
	</form>
</div>