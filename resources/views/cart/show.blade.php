@extends('layouts.main')
@section('content')
<div class="ui centered grid" style="margin: 5rem 0 2.5rem;">
	<div class="ui nine wide column">
		@if(count($carts) > 0)
		<table class="ui table">
			<thead>
				<tr>
					<th>Image</th>
					<th class="center aligned">Nom</th>
					<th class="right aligned">Prix</th>
				</tr>
			</thead>
			<tbody>
				@foreach($carts as $cart)
				<tr>
					<td><img src="{{$cart['img']}}" alt="{{$cart['nom']}}" width="64" height="64"></td>
					<td class="center aligned">{{$cart['nom']}}</td>
					<td class="right aligned">{{$cart['prix']}} &euro;</td>
				</tr>
				@endforeach
				<tr>
					<td></td>
					<td></td>
					<td class="right aligned">Total: {{$total}} &euro;</td>
				</tr>
			</tbody>
		</table>
		<form action="/panier" method="post" >
			{{ csrf_field() }}
			<button type="submit" class="ui yellow button right floated" formmethod="post" formaction="/panier">Commander</button>
		</form>
		<form action="/cart/delete" method="post" accept-charset="utf-8">
			{{ csrf_field() }}
			<button type="submit" class="ui red button right floated">Annuler</button>
		</form>
		@else
		<div class="ui floating message"><h2>What a shame....</h2><br /> Votre panier est vide.</div>
		@endif
	</div>	
</div>
@endsection