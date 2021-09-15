<!DOCTYPE html>
<html>
<head>
	<title>Criar Herói API</title>
</head>
<body>

<form action="v1/Api.php?apicall=createhero" method="POST">

	<label for="nome">Nome</label>
	<input type="text" name="name" id="name">

	<label for="nome_real">Nome real</label>
	<input type="text" name="realname" id="realname">

	<label for="nota">Nota</label>
	<input type="text" name="rating" id="rating">
	
	<label for="time">Time</label>
	<input type="text" name="teamaffiliation" id="teamaffiliation">

	<button type="submit" name="btn_criar" class="btn">Criar</button>

</form>

</body>
</html>