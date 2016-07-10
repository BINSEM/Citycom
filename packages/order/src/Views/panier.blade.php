@extends('layouts.main')

@section('content')
<h1></h1>
<h1>Votre commande</h1>

@if(isset($products))
<div class="ui stackable grid">
	<div class="ten wide centered column">
		<table class="ui table">
			<tr>
				<td><h4>id</h4></td>
				<td><h4>Produit</h4></td>
				<td><h4>Qté</h4></td>
				<td><h4>Prix</h4></td>
			</tr>
			@foreach ($products as $product)
			<tr>
				<td> {{$product->id}} </td>
				<td>{{$product->nom}}</td>
				<td>{{$product->qte}}</td>
				<td>{{$product->prix}}</td>
			</tr>
			@endforeach
			<tr>
				<td></td>
				<td></td>
				<td><h4>Total</h4></td>
				<td><h4>{{$total}}</h4></td>
			</tr>
		</table>
		<form action="" method="post" class="ui form">
			{{csrf_field()}}
			<input type="hidden" name="user_id" value="{{$user->id}}">
			<input type="hidden" name="commande" value="{{session()->get('current_basket')}}">
			<label for="livraison">Votre Type de livraison</label>
			<select name="livraison" id="livraison">
				@foreach($livraisons as $livraison)
				<option value="{{$livraison->type}}">{{$livraison->type}}</option>
				@endforeach
			</select>
			<label for="paiement">Votre mode de paiement</label>
			<select name="paiement" id="paiement">
				@foreach($paiements as $paiement)
				<option value="{{$paiement->nom}}">{{$paiement->nom}}</option>
				@endforeach
			</select>
			<br>
			<input type="submit" value="Confirmer l'achat" class="ui button">
		</form>
	</div>
</div>
<h1></h1>
<h1></h1>
<h1></h1>
@endif
@endsection