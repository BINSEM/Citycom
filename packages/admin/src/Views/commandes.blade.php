@extends('admin::layout')

@section('content')

<h2>Liste des commandes</h2>
<table class="ui table">
	<tr>
		<td> id </td>
		<td> Client ID </td>
		<td> Statut </td>
		<td>  </td>
		<td>  </td>
	</tr>
@if(count($commandes)>0)
	@foreach($commandes as $command)
		<tr>
			<form action="/admin/command" method="post">
				{{csrf_field()}}
				{{method_field('PUT')}}
				<td> {{$command->id}} </td>
				<td> <a href="/admin/users/{{$command->user_id}}">{{$command->user_id}}</a> </td>
				<td>
					<select name="statut" id="{{$command->id}}" status="{{$command->statut}}">
						@foreach($statuses as $status)
						<option value="{{$status}}" @if($status == $command->statut) selected @endif>{{$status}}</option>
						@endforeach
					</select>
					<input type="hidden" name="id" value="{{$command->id}}">
				</td>
				<td><a href="/order/{{$command->id}}">Détail</a></td>
				<td><button type="submit">Enregistrer</button></td>
			</form>
		</tr>
	@endforeach
@else
	<tr>
		<td>
			Aucune commande	
		</td>
	</tr>
@endif
</table>

@endsection