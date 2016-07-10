@extends('layouts.main')

@section('content')

<div id="products" class="ui centered grid" style="margin-top:6.5rem; width: 95%; margin-left: auto; margin-right: auto;">
	<div>
		<h2>Nos Produits <a href="/cart">Panier</a></h2>
		<p>{{$total}} &euro;</p>
		<p>{{$carts}} Produit</p>
	</div>
	<div class="doubling four column row">
		@foreach($products as $product)
		
		<div class="four wide column" id="cardori">
			<div class="ui card">
				<div class="image">
					<img src="{{$product->img}}" id="imageori">
				</div>
				<div class="content">
					<a class="header">{{$product->nom}}</a>
					<div class="description">
						{{$product->prix}} &euro;
					</div>
				</div>
				<div class="extra content">
					<form action="/cart/post/{{$product->id}}" method="POST">
						{{ csrf_field() }}
						<button class="ui fluid yellow button" type="submit" formmethod="post" formaction="/cart/post/{{$product->id}}">Ajouter au panier</button>
					</form>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection