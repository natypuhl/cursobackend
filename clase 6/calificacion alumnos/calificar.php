<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de la Calificación</title>
</head>
<body>

<?php
    if (isset($_POST['nombre']) && isset($_POST['nota'])) {

        $nombre = $_POST['nombre'];
        $nota = $_POST['nota'];

        if (is_numeric($nota) && $nota >= 0 && $nota <= 10) {
            $calificacion = '';
            if ($nota >= 0 && $nota <= 2) {
                $calificacion = 'Muy deficiente';
            } elseif ($nota >= 3 && $nota <= 5) {
                $calificacion = 'Insuficiente';
            } elseif ($nota >= 6 && $nota <= 7) {
                $calificacion = 'Bien';
            } elseif ($nota >= 8 && $nota <= 9) {
                $calificacion = 'Notable';
            } elseif ($nota == 10) {
                $calificacion = 'Sobresaliente';
            }
            echo "<h2>Resultado de la calificación para $nombre:</h2>";
            echo "<p>Nota: $nota</p>";
            echo "<p>Calificación: $calificacion</p>";
        } else {
            echo "<h2>Error:</h2>";
            echo "<p>La nota ingresada no es válida. Por favor, ingrese un número entre 0 y 10.</p>";
        }
    } else {
        echo "<h2>Error:</h2>";
        echo "<p>Por favor, ingrese tanto el nombre del alumno como la nota.</p>";
    }
?>

</body>
</html>
