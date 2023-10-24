<?php
// Ejercicio A
echo "Ejercicio A: Almacenar y mostrar los 10 primeros números pares:<br>";
$numeros_pares = [];
for ($i = 2; $i <= 20; $i += 2) {
    $numeros_pares[] = $i;
}
foreach ($numeros_pares as $numero) {
    echo $numero . "<br>";
}

// Ejercicio B
echo "<br>Ejercicio B: Mostrar el array con print_r():<br>";
$array_valores = ["Pedro", "Ana", 34, 1];
print_r($array_valores);
echo "<br>";

// Ejercicio C
echo "<br>Ejercicio C: Mostrar un array asociativo:<br>";
$datos_personales = [
    "Nombre" => "Pedro",
    "Apellido" => "Torres",
    "Dirección" => "Av. Mayo 3703",
    "Teléfono" => "1122334455"
];
foreach ($datos_personales as $clave => $valor) {
    echo "$clave: $valor<br>";
}

// Ejercicio D
echo "<br>Ejercicio D: Mostrar ciudades con sus índices:<br>";
$ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
foreach ($ciudades as $indice => $ciudad) {
    echo "La ciudad con el índice $indice tiene el nombre $ciudad<br>";
}

// Ejercicio E
echo "<br>Ejercicio E: Mostrar ciudades con índices asociativos:<br>";
$ciudades_asociativas = [
    "MD" => "Madrid",
    "BCL" => "Barcelona",
    "LD" => "Londres",
    "NY" => "New York",
    "LA" => "Los Ángeles",
    "CCG" => "Chicago"
];
foreach ($ciudades_asociativas as $indice => $ciudad) {
    echo "El índice de $ciudad es $indice<br>";
}
?>
