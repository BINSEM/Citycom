@extends('admin::layout')

@section('content')

<h2>Liste des utilisateurs</h2>
<table>
	<tr>
		<td> id </td>
		<td> Client </td>
		<td> Statut </td>
	</tr>
@if(count($users)>0)
	@foreach($commandes as $command)
		<tr>
			<form action="/admin/command" method="post">
				<td> {{$command->id}} </td>
				<td> {{$command->username}} </td>
				<td>
					<input type="hidden" name="id" value="{{$command->id}}">
					<select name="statut" id="">
						<option value=""></option>
					</select>
				</td>
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