@extends('admin::layout')

@section('content')

<h2 class="ui fifteen wide column">Ajouter / Modifier un type de livraison</h2>
<form action="" method="post" class="ui form">
	{{csrf_field()}}
	<label for="type">Type</label><input type="text" name="type" placeholder="Type de livraison" required="true"><br>
	<label for="type">Description</label><input type="text" name="description" placeholder="Détails sur la livraison"><br>
	<label for="type">Montant</label><input type="number" step="0.01" name="montant" placeholder="Montant de la livraison" required="true"><br>
	<label for="type">Condition</label><input type="text" name="condition" placeholder="Conditions de la livraison"><br>
	<button type="submit" class="ui button">Ajouter</button>
</form>
<table class="ui sixteen wide column centered table">
	<tr>
		<td> id </td>
		<td> Type </td>
		<td> Description </td>
		<td> Montant </td>
		<td> Conditions </td>
		<td>  </td>
		<td>  </td>
	</tr>
@if(count($livraisons)>0)
	@foreach($livraisons as $livraison)
	<tr>
		<form action="" method="post" class="ui form">
			{{csrf_field()}}
			{{method_field('PUT')}}
			<td> {{$livraison->id}} <input type="hidden" name="id" value="{{$livraison->id}}"> </td>
			<td> <input type="text" name="type" value="{{$livraison->type}}"> </td>
			<td> <input type="text" name="description" value="{{$livraison->description}}"> </td>
			<td> <input type="number" step="0.01" name="montant" value="{{$livraison->montant}}"> </td>
			<td> <input type="text" name="condition" value="{{$livraison->condition}}"> </td>
			<td> <button type="submit"> Modifier</button> </td>
		</form>
		<form action="" method="post">
			{{csrf_field()}}
			{{method_field('DELETE')}}
			<input type="hidden" name="id" value="{{$livraison->id}}">
			<td> <button type="submit"> X </button> </td>
		</form>
	</tr>
	@endforeach
@else
	<tr>
		<td>
			Aucun mode de livraison	
		</td>
	</tr>
@endif
</table>

@endsection