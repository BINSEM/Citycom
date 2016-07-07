@extends('layouts.main')

@section('content')

<form class="ui form" action="/profile/saveImage/{{$user->id}}" method="POST">
	{{ csrf_field() }}
	<div class="field">
		<div class="ui action input">
			<label for="path" class="ui icon button btn-file">
				<input type="file" id="path" name="path">
			</label>
		</div>
	</div>
	<button class="ui basic green button" type="submit">Ajouter</button>
</form>

@endsection