<?php
require_once 'db_connection.php';

$query = "SELECT * FROM productos";
$result = $pdo->query($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Corazón de León - Administrador</title>
</head>
<body>

    <header>
        <div class="logo-container">
            <img src="logo.png" alt="Logo Corazón de León">
        </div>
        <a href="login.php">Login</a>
        <a href="index.php">Productos</a>
    </header>

    <div class="admin-container">

    </div>

</body>
</html>
