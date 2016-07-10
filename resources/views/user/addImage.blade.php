@extends('layouts.main')

@section('content')

<div id="profile_img" class="ui segment">
	<h2>Ajouter une image</h2>
	<form class="ui form" action="/profile/saveImage/{{$user->id}}" method="POST">
		{{ csrf_field() }}
		<div class="field">
			<div class="ui action input">
				<label for="path" class="ui icon button btn-file"> Cliquer et charger une image
					<input type="file" id="path" name="path" style="display: none;">
				</label>
			</div>
		</div>
		<button class="ui yellow button" type="submit">Ajouter</button>
	</form>
</div>

@endsection