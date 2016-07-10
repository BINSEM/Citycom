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
				<div class=" four wide column" id="cardori">
					<div class="ui card">
						<div class="image">
							<img id="imageori" src="/images/rock.jpg">
						</div>
						<div class="content">
							<a class="header">Beau Caillou</a>
							<div class="description">
								Le plus beau!
							</div>
						</div>
						<div class="extra content">
							<form action="/cart/post/{{$product->id}}" method="POST">
								{{ csrf_field() }}
								<button class="ui fluid yellow button" type="submit" formmethod="post" formaction="/cart/post/{{$product->id}}">Ajouter au panier</button>
							</form>			
							<br />			
							<i class="zoom icon"></i>
							<a onClick="parent.location='/profilarticle'">
								Plus d'informations
							</a>
						</div>
					</div>	
				</div>
				@endforeach

				<div class="four wide column" id="cardori">
					<div class="ui card">
						<div  class="image">
							<img id="imageori" src="/images/waterrocks.jpg">
						</div>
						<div class="content">
							<a class="header">Joli Caillou</a>
							<div class="description">
								Le plus beau!
							</div>
						</div>
						<div class="extra content">
							<i class="shop icon"></i>
							<a onClick="parent.location='/addcart'">
								Ajouter au panier
							</a>			
							<br />			
							<i class="zoom icon"></i>
							<a onClick="parent.location='/profilarticle'">
								Plus d'informations
							</a>

						</div>
					</div>
				</div>			
				<div class="four wide column" id="cardori">
					<div class="ui card">
						<div class="image">
							<img id="imageori"  src="/images/rock.jpg">
						</div>
						<div class="content">
							<a class="header">Beau Caillou</a>
							<div class="description">
								Le plus beau!
							</div>
						</div>
						<div class="extra content">
							<i class="shop icon"></i>
							<a onClick="parent.location='/addcart'">
								Ajouter au panier
							</a>			
							<br />			
							<i class="zoom icon"></i>
							<a onClick="parent.location='/profilarticle'">
								Plus d'informations
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>





@endsection
