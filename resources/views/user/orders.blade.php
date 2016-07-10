@extends('layouts.main')

@section('content')

<div id="orders" class="ui grid" style="margin-top:5rem;">
	<div class="three centered column row">
		@foreach($orders as $order)
		<div class="four wide column">
			<div class="ui grid">
				<div class="ui row">
					<div class="column">
						<div class="ui segment" style="margin:0.5rem;"">
							<h4>Order</h4>
							<div class="ui divider"></div>
							<p>{{$order->commande}}</p>
							<p>{{$order->statut}}</p>
							<p>{{$order->livraison}}</p>
							<p>{{$order->created_at}}</p>
							<p>{{$order->updated_at}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>

@endsection