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
		<p>La couleur est {{$fruit->description}}.</p>
		<p>Le prix est {{$fruit->prix /100}} €. </p>
		<p>Il y a {{$fruit->stock}} .</p>
		<div class="ui ">
		<form action="/show/add/{{$fruit->id}}" method="post">
		{{csrf_field()}} 
			<button class="medium ui button"><i class="plus icon"></i></button>
		</form> 
		<form action="/show/down/{{$fruit->id}}" method="post">
			{{csrf_field()}}
			<button class="medium ui button"><i class="minus icon"></i></button>	
		</form> 
		</div>
		<p>Il est vient de {{$fruit->origine}} .</p>
		<a href="/" class="ui button">Home</a>
	</div>
</body>
</html>