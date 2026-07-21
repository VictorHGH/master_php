<?php

/*
 Tipose de datos
Los datos pueden ser de cualquier tipo, pero hay algunos tipos de datos que son más comunes.
 
Los tipos de datos son:
 
- Integer: Un número entero = 1234
- Float: Un número decimal = 12.34
- String: Una cadena de caracteres = "Hola mundo"
- Boolean: Verdadero o falso = true o false
- Null: Un valor nulo = null
- Array: Una lista de valores = []
- Object: Un objeto = {}
 */

$tipos = [
	100,
	10.5,
	"Hola mundo",
	true,
	null,
	[],
	(object)["nombre" => 1]
];

echo "<br>";
// primera solución (mejor no)
$total = count($tipos);
for ($i = 0; $i < $total; $i++) {
    echo $i + 1 . ". Tipo: " . gettype($tipos[$i]) . "<br>";
}

echo "<br>";
// segunda solución (buena)
$i = 0;
foreach ($tipos as $tipo) {
	$i += 1;
    echo "$i. Tipo: " . gettype($tipo) . "<br>";
}

echo "<br>";
// tercera solución (la mejor)
foreach ($tipos as $i => $tipo) {
    echo ($i + 1) . ". Tipo: " . gettype($tipo) . "<br>";
}

$nombre = "Victor Hugo González";

echo "<br>";
var_dump($nombre);

?>
