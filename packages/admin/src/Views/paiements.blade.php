@extends('admin::main')

@section('content')

<h1 class="ui fifteen wide column">Paiements</h1>
<div class="ui ten wide column">
	<form action="" method="post" class="ui form">
		{{csrf_field()}}
		{{method_field('PUT')}}
		<label for="ajout"></label>
		<div class="ui action input">
			<input type="text" name="ajout" placeholder="Ajouter un mode de paiement"><input type="submit" class="ui submit button" value="Ajouter">
		</div>
	</form><br>
	<form action="" method="post" class="ui form">
		{{csrf_field()}}
		{{method_field('DELETE')}}
		<label for="delete"></label>
		<div class="ui action input">
			<input type="text" name="delete" placeholder="Supprimer un mode de paiement"><input type="submit" class="ui button" value="Supprimer">
		</div>
	</form>
</div>
@if(isset($paiements))
<div class="ui horizontal divider"></div>
<div class="ui list four wide column">
	<h4>Modes de Paiement actifs</h4>
	<form action="" method="post" class="ui form">
	{{csrf_field()}}
	@foreach($paiements as $paiement)
		<div class="item">
			<input type="checkbox" name="{{$paiement->nom}}" @if($paiement->active) checked @endif >
			{{$paiement->nom}}
		</div>
	@endforeach
		<br>
		<input type="submit" value="Modifier" class="ui button">
	</form>
</div>
@endif

@endsection