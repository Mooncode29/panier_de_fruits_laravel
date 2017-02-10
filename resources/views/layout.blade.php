<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Manager</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
	<menu>
		<div>
			<a href="/products">Product Manager</a>
		</div>
	</menu>
	<div class="ui container">
		@yield('content')
		<form action="/products/showForm" method="get">
		{{csrf_field()}}
			<button class="ui button" type="submit">
			Ajouter nouveau produit
			</button>
		</form>
	</div>

	<footer>
		Copyright Irène
	</footer>
	<script>
		console.log("laravel c'est compliqué au début!");
	</script>
</body>
</html>