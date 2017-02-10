<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
	<meta charset="UTF-8">
	<title>Edit panier de fruits</title>
</head>
<body>
	<div class="ui grid">
	<div class="ui container">
		<div class="form">
			<form class="ui form" action="/show/editFruit/{{$editFruit->id}} " method="post">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="field">
					<label>Nom de fruit</label>
					<input type="text" name="name" placeholder="Name" value="{{$editFruit->name}}">
				</div>
				<div class="field">
					<label>La description</label>
					<input type="text" name="description" placeholder="description" value="{{$editFruit->description}}">
				</div>
				<div class="field">
					<label>Prix</label>
					<input type="number" name="prix" placeholder="prix" value="$editFruit->prix">
				</div>
				<div class="field">
					<label>Stock</label>
					<input type="number" name="stock" placeholder="stock" value="$editFruit->stock">
				</div>
				<div class="field">
					<label> L'origine</label>
					<input type="text" name="origine" placeholder="origine" value="{{$editFruit->origine}}">
				</div>
				<button class="ui green button" type="submit">Enregistrer</button>
			</form>
		</div>
		</div>
	</body>
	</html>