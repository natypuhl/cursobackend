<?php


function calcularCuadrado($lado) {
    $perimetro = 4 * $lado;
    $superficie = $lado * $lado;
    echo "Perímetro del cuadrado: " . $perimetro . "<br>";
    echo "Superficie del cuadrado: " . $superficie . "<br>";
}


function convertirMayusculas($cadena) {
    echo "En mayúsculas: " . strtoupper($cadena) . "<br>";
}

function convertirMinusculas($cadena) {
    echo "En minúsculas: " . strtolower($cadena) . "<br>";
}


function verificarDiasMes($mes) {
    if ($mes >= 1 && $mes <= 12) {
        if ($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) {
            return "El mes tiene 30 días.";
        } elseif ($mes == 2) {
            return "El mes tiene 28 o 29 días.";
        } else {
            return "El mes tiene 31 días.";
        }
    } else {
        return "Mes no válido.";
    }
}


function esPalindromo($cadena) {
    $cadenaLimpia = preg_replace("/[^A-Za-z0-9]/", '', $cadena);
    $cadenaInvertida = strrev($cadenaLimpia);
    return strtolower($cadenaLimpia) == strtolower($cadenaInvertida);
}

?>
