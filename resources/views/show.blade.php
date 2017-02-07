<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
	<meta charset="UTF-8">
	<title>Show</title>
</head>
<body>
	<h1>Product Manager</h1>
	<h2>{{$fruit->name}}</h2>
	<p>La couleur est {{$fruit->description}}.</p>
	<p>Le prix est {{$fruit->prix /100}} €. </p>
	<p>Il y a {{$fruit->stock}} .</p>
	<p>Il est vient de {{$fruit->origine}} .</p>
	<a href="/" class="ui button">Home</a>
</body>
</html>