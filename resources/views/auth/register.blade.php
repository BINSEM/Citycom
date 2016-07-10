@extends('layouts.main')

@section('content')
<div class="ui grid" id="fondlogin">
    &nbsp;
    &nbsp;

    <div class="three column row" >
       <div class="centered floated column"id="inscription">
           <div class="ui header">S'inscrire au Royaume de la Caillasse</div>
           <form class="ui form" role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}

            <div class="ui form{{ $errors->has('name') ? ' has-error' : '' }}">
                <label id="labelori"for="name">Nom</label>

                <div>
                    <input id="name" type="text" name="name" value="{{ old('name') }}">

                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="ui form{{ $errors->has('email') ? ' has-error' : '' }}">
                <label id="labelori"for="email">Email</label>

                <div >
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="ui form{{ $errors->has('password') ? ' has-error' : '' }}">
                <label id="labelori" for="password">Mot de Passe</label>

                <div>
                    <input id="password" type="password" class="form-control" name="password">

                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="ui form{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <label id="labelori" for="password-confirm">Confirmation du Mot de Passe</label>

                <div>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                    @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                    @endif
                </div>
                &nbsp;
                &nbsp;
            </div>

            <button formaction="{{ url('/register') }}" formmethod="post" type="submit" class="ui yellow button">S'inscrire</button>
        </form>
    </div>
</div>

@endsection
    @include('parts.footer')