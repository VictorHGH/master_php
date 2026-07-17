<!DOCTYPE html>
<html lang='es'>
<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<title>Imprimir por pantalla master en php</title>
</head>
<body>
	<h1>Master en php, <?php echo "soy victor." ?></h1>
	
	<?= "Binvenido al curso mas grande de PHP" ?>

	<?php
	// Titular
	echo '<h3>LIstado de videojuegos</h3>';
	/*
	Comentario multilinea
	No sale en ningun lado
	mas que en el codigo de servidor.
	 */
	echo '<ul>'
		. '<li>GTA</li>'
		. '<li>FIFA</li>'
		. '<li>Mario Bros</li>'
		. '</ul>';

	echo "<br>HOLA HOLA HOLA<br>";
	echo '<p>Esta es una'.' - '.'lista de juegos</p>';
	?>

</body>
</html>
