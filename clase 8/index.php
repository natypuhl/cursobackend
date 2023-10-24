<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Funciones PHP</title>
</head>
<body>

<?php
include 'funciones.php';


echo "<h2>Ejercicio A:</h2>";
calcularCuadrado(5);


echo "<h2>Ejercicio B:</h2>";
convertirMayusculas("Mayusculas y Minusculas");
convertirMinusculas("Mayusculas y Minusculas");


echo "<h2>Ejercicio C:</h2>";
echo verificarDiasMes(2) . "<br>";


echo "<h2>Ejercicio D:</h2>";
$cadena = "Somos o no somos";
if (esPalindromo($cadena)) {
    echo "$cadena es un palíndromo.";
} else {
    echo "$cadena no es un palíndromo.";
}
?>

</body>
</html>
