<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de Formulário em PHP</title>
</head>
<body>
	<h2>Informe seu nome:</h2>
	<form action="processa_formulario.php" method="post">
		<label for="nome">Nome:</label>
		<input type="text" id="nome" name="nome">
		<input type="submit" value="Enviar">
	</form>
</body>
</html>

