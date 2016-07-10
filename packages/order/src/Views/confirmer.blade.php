@extends('layouts.main')

@section('content')
<h1></h1>
@if(session()->has('message'))
<h1>{{session()->get('message')}}</h1>
@endif

@endsection