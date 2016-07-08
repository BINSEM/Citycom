@extends('layouts.main')

@section('content')

<div id="profile" class="ui segment" style="margin: auto; margin-top: 7rem;  background-color:white; width: 50%;">
	<form class="ui form" action="/profile/saveImage/{{$user->id}}" method="POST">
		{{ csrf_field() }}
		<div class="field">
			<div class="ui action input">
				<label for="path" class="ui icon button btn-file"  style="width:100%;">
					<input type="file" id="path" name="path">
				</label>
			</div>
		</div>
		<button class="ui basic green button" type="submit">Ajouter</button>
	</form>
</div>

@endsection