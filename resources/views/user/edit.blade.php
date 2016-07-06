@extends('layouts.main')

@section('content')

<form class="ui form" action="/profile/update/{{$user->id}}" method="POST">

@endsection