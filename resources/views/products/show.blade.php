@extends('layout')
@section('content')
<h1>{{$product->name}}</h1>
<h3>Description</h3>
<p>{{$product->description}}</p>
<h3>Prix</h3>
<div>{{$product->price /100}} €</div>

<div class="ui segment">
	<h3>Stock</h3>
	<form action="/products/sell/{{$product->id}}" method="post">
		{{csrf_field()}}
		<button class="ui button">-</button>
		
	</form>
		{{$product->stock}}
	<form action="/products/restock/{{$product->id}}" method="post">
		{{csrf_field()}}
		<button class="ui button">+</button>
	</form>
	
</div>
@stop