@extends('layout')
@section('content')
<h1>Ma liste de produits</h1>
<table class="ui inverted table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nom du produits</th>
			<th>Prix en €</th>
			<th>Description</th>
			<th>Stock</th>
			<th>Détails</th>
		</tr>
	</thead>
	@foreach($produits as $product)
	<tbody>
		<tr>
			<td><?=$product['id'];?></td>
			<td><?=$product['name'];?></td>
			<td><?=$product['price']/100;?></td>
			<td><?=$product['description'];?></td>
			<td><?=$product['stock'];?></td>
			<td><a href="/products/show/{{$product->id}}" class="ui button">Détail</a></td>
		</tr>
	</tbody>
		<!-- <li><a href="/products/show/{{$product->id}}">{{$product->name}}</a></li>
 -->
	@endforeach
</table>
@stop