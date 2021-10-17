<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio</title>
</head>
<body>
	<?php
		include 'calc.php';

		$c = new Calculadora();
		$c->soma(12);
		$c->soma(2);
		$c->subtracao(1);
		$c->multiplicacao(3);
		$c->divisao(2);
		$c->soma(0.5);
		$c->total();

	?>
	
</body>
</html>