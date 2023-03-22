<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de Formulário em PHP</title>
</head>
<body>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$nome = $_POST["nome"];
			echo "<h2>Bem-vindo, " . $nome . "!</h2>";
		}
	?>
</body>
</html>
