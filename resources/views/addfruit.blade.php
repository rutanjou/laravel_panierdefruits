<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
	<meta charset="UTF-8">
	<title>Addfruit</title>
</head>
<body>
<div class="ui container">
<h1>Ajouter les fruits</h1>
<br>
<br>
<br>
	<div class="ui grid">
	<div class="ui container">
		<div class="form">
			<form class="ui form" action="/addfruit/new" method="post">
			{{csrf_field()}}
				<div class="field">
					<label>Nom de fruit</label>
					<input type="text" name="name" placeholder="Name">
				</div>
				<div class="field">
					<label>La description</label>
					<input type="text" name="description" placeholder="description">
				</div>
				<div class="field">
					<label>Prix</label>
					<input type="number" name="prix" placeholder="prix">
				</div>
				<div class="field">
					<label>Stock</label>
					<input type="number" name="stock" placeholder="stock">
				</div>
				<div class="field">
					<label> L'origine</label>
					<input type="text" name="origine" placeholder="origine">
				</div>
				<button class="ui orange button" type="submit">Enregistrer</button>
			</form>
		</div>
		</div>
		</div>
</body>
</html>