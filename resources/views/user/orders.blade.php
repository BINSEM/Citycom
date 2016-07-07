@extends('layouts.main')

@section('content')

@foreach($orders as $order)
<p>{{$order->commande}}</p>
<p>{{$order->statut}}</p>
<p>{{$order->livraison}}</p>
<p>{{$order->created_at}}</p>
<p>{{$order->updated_at}}</p>
@endforeach

@endsection