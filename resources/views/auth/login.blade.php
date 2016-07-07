@extends('layouts.main')

@section('content')
<div class="ui grid">
                &nbsp;
                &nbsp;

<div class="three column row">
     <div class="centered floated column">
     <div class="ui header">Se connecter au Royaume de la Caillasse</div>
        <form class="ui form" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <div class="field{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email">Email</label>

                <input id="email" type="email" name="email" value="{{ old('email') }}">

                @if ($errors->has('email'))
                <span>
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="field{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password">Mot de passe</label>
                <input id="password" type="password" name="password">

                @if ($errors->has('password'))
                <span>
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
                &nbsp;

            <div class="ui form">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember">Se souvenir de moi</input>
                    </label>
                </div>
            </div>

                &nbsp;
            <div class="ui form">
                <input type="submit" class="ui blue button">
                <i class="signin"></i> 
            </input>

<!--             <a class="ui button" href="{{ url('/password/reset') }}">Vous avez oublié votre mot de passe?</a> -->

        </form>
    </div>
</div>
</div>
</div>



@endsection
