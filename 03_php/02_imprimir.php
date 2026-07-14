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
	echo '<ul>'
		. '<li>Super Mario Bros</li>'
		. '<li>Mario Kart</li>'
		. '<li>Zelda</li>'
		. '<li>Sonic</li>'
		. '<li>Donkey Kong</li>'
		. '</ul>';

	echo '<p>Esta es toda'.' - '.'lista de juegos</p>';
	?>

</body>
</html>
