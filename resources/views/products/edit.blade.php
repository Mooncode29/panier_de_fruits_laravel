@extends('layout')
@section('content')
<form class= "ui form" action="/products/saveEdit" method="post">
	{{csrf_field()}}
	<div class="field">
		<input type="hidden" name="id" value="{{$produits->id}}">
	</div>
	<div class="field">
		<label for="name">Nom du produit</label>
		<input type="text" name="name" value="{{$produits->name}}">
	</div>
	<div class="field">
		<label for="">Prix</label>
		<input type="number" name="price" value="{{$produits->price}}">
	</div>
	<div class="field">
		<label for="description">Description</label>
		<input type="text" name="description" value="{{$produits->description}}">
	</div>
	<div class="field">
		<label for="quantite">Quantité</label>
		<input type="number" name="stock" value="{{$produits->stock}}">
	</div>
	<div class="field">
		<input type="submit" value="Valider les modifications">
	</div>

</form>

@stop