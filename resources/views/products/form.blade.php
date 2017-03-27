@extends('layout')
@section('content')
<h1>Créer votre produit</h1>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class= "ui form" action="/products/addProduct" method="post">
	{{csrf_field()}}
	<div class="field">
		<label for="name">Nom du produit</label>
		<input type="text" name="name">
	</div>
	<div class="field">
		<label for="">Prix</label>
		<input type="number" name="price">
	</div>
	<div class="field">
		<label for="description">Description</label>
		<input type="text" name="description">
	</div>
	<div class="field">
		<label for="quantite">Quantité</label>
		<input type="number" name="stock">
	</div>
	<div class="ui segment">
		<button class="ui green button" type="submit">
				Enregistrer
		</button>
		
	</div>

</form>

@stop