@extends('layouts.main')
@section('content')


<div id="arriere" >
	<div id="text">
		Venus du bout du monde, 
		Pour vous, <br />
		les plus beaux cailloux
	</div>
	<div id="centertitre" >
		<h3 id="titre">
			au royaume de la caillasse
		</h3>
		<a href="#articlemag" id="admirez">admirer notre collection de cailloux</a>
	</div>
	<div class="ui yellow segment">
		<div class="ui centered grid">
			<div class="doubling four column row" id="articlemag">
				@foreach($products as $product)
				<div class="four wide column" id="cardori">
					<div class="ui card">
						<div  class="image">
							<img id="imageori" src="/images/{{$product->img}}">
						</div>
						<div class="content">
							<a class="header">{{$product->nom}}</a>
							<div class="description">
								{{$product->description}}
							</div>
						</div>
						<div class="extra content">
							<form action="/cart/post/{{$product->id}}" method="post">
								{{ csrf_field() }}
							
								<button type="submit" formaction="/cart/post/{{$product->id}}" formmethod="post" class="ui yellow tiny labeled icon button"><i class="shop icon"></i>Ajouter au panier</button>			
							</form>
							<br />			
							<br />			
							<a href="/cart/profilarticle/{{$product->id}}" class="ui yellow tiny labeled icon button">
							<i class="zoom icon"></i>
								Plus d'informations
							</a>

						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>





@endsection
