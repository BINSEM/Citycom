@extends('layouts.main')

@section('content')
<div class="ui grid" id="fondlogin">
                &nbsp;
                &nbsp;

<div class="three column row" >
     <div class="centered floated column" id="connection">
     <div class="ui header">Se connecter au Royaume de la Caillasse</div>
        <form class="ui form" role="form" method="POST" action="/auth/login">
            {{ csrf_field() }}

            <div class="ui form {{ $errors->has('email') ? ' has-error' : '' }}">
                <label id="labelori" for="email">Email</label>

                <input id="email" type="email" name="email" value="{{ old('email') }}">

                @if ($errors->has('email'))
                <span>
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="ui form {{ $errors->has('password') ? ' has-error' : '' }}">
                <label id="labelori" for="password">Mot de passe</label>
                <input id="password" type="password" name="password">

                @if ($errors->has('password'))
                <span>
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
                &nbsp;
                &nbsp;
            <div class="ui form">
                <button type="submit" formaction="/login" formmethod="post" class="ui yellow button">Valider</button>
                <i class="signin"></i> 
            </input>


        </form>
    </div>
</div>
</div>
</div>



@endsection
    @include('parts.footer')
