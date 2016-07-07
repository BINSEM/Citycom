@extends('admin::layout')

@section('content')

<h2>Liste des utilisateurs</h2>
<table>
	<tr>
		<td> id </td>
		<td> Pseudo </td>
		<td> Nom </td>
		<td> Prénom </td>
		<td> E-mail </td>
		<td> Adresse </td>
	</tr>
@if(count($users)>0)
	@foreach($users as $user)
		<tr>
			<td><a href="/admin/users/{{$user->id}}"> {{$user->id}} </a></td>
			<td><a href="/admin/users/{{$user->id}}"> {{$user->name}} </a></td>
			<td><a href="/admin/users/{{$user->id}}"> {{$user->nom}} </a></td>
			<td><a href="/admin/users/{{$user->id}}"> {{$user->prenom}} </a></td>
			<td><a href="/admin/users/{{$user->id}}"> {{$user->email}} </a></td>
			<td><a href="/admin/users/{{$user->id}}"> {{$user->adresse}} </a></td>
		</tr>
	@endforeach
@else
	<tr>
		<td>
			Pas d'utilisateurs	
		</td>
	</tr>
@endif
</table>

@endsection