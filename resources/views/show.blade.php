<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
	<meta charset="UTF-8">
	<title>Show</title>
</head>
<body>
	<div class="ui container">
		<h1>Product Manager</h1>
		<h2>{{$fruit->name}}</h2>
		<h3>Description</h3>
		<p>{{$fruit->description}}</p>
		<h3>Prix</h3>
		<p>Le prix est {{$fruit->prix /100}} €. </p>
		<div class="ui segment">
			<h3>Stock</h3>
			<form action="/show/add/{{$fruit->id}}" method="post">
				{{csrf_field()}} 
				<button class="medium ui button"><i class="plus icon"></i></button>
			</form> 
			<p>Il y a {{$fruit->stock}} .</p>
			<form action="/show/down/{{$fruit->id}}" method="post">
				{{csrf_field()}}
				<button class="medium ui button"><i class="minus icon"></i></button>	
			</form> 
		</div>
		<h3>Origine</h3>
		<p>Il est vient de {{$fruit->origine}} .</p>
		<p><a href="/" class="ui blue button">Home</a>

		<div class="ui container">
			<a href="/show/editFruit/{{$fruit->id}}">
				<input type="submit" value="Editer" class="ui red button">
			</a>
		</p>
		</div>
	</div>
	</div>
</body>
</html>