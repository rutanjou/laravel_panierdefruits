<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
	<meta charset="UTF-8">
	<title>Fruits</title>
</head>
<body>
	<div class="ui grid">
	<div class="six wide colum">
	</div>
	<h1>Table des Fruits</h1>
	</div>
	<div class="ui grid">
	<div class="four wide colum"></div>
		<table class="ui striped table">
		<thead>
			<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Description</th>
			<th>Prix</th>
			<th>Stock</th>
			<th>Origine</th>
			</tr>
			</thead>
			<tbody>
			@foreach($fruits as $key)
			<tr>
				<td>{{$key->id}}</td>
				<td>{{$key->name}}</td>
				<td>{{$key->description}}</td>
				<td>{{$key->prix}}</td>
				<td>{{$key->stock}}</td>
				<td>{{$key->origine}}</td>
			</tr>	
			  @endforeach
			</tbody>
		</table>
	</div>
	</body>
</html>