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
    <title>Corazón de León - Productos</title>
</head>
<body>

<header>
    <div class="logo-container">
        <img src="logo.png" alt="Logo Corazón de León">
    </div>
    <h1>Corazón de León</h1>
    <a href="login.php">Login</a>
    <a href="admin.php">Admin</a>
</header>

<div class="product-container">
    <div class="product">
        <img src="bikini flower.jpg" alt="bikini flower">
        <h2>bikini flower</h2>
        <p class="price">$11000</p>
        <button>Añadir al carrito</button>
    </div>

    <div class="product">
        <img src="Enteriza Atenas.jpg" alt="Enteriza Atenas">
        <h2>Enteriza Atenas</h2>
        <p class="price">$10000</p>
        <button>Añadir al carrito</button>
    </div>

    <div class="product">
        <img src="pupas 5.jpg" alt="Pijama Love Rosa">
        <h2>Pijama Love Rosa</h2>
        <p class="price">$12000</p>
        <button>Añadir al carrito</button>
    </div>

    <div class="product">
        <img src="pupas 1.jpg" alt="Pijama Majo">
        <h2>Pijama Majo</h2>
        <p class="price">$12000</p>
        <button>Añadir al carrito</button>
    </div>

        <div class="product">
            <img src="SET VAQUITA.jpg" alt="Set Emilia">
            <h2>Set Emilia</h2>
            <p class="price">$9000</p>
            <button>Añadir al carrito</button>
        </div>

            <div class="product">
                <img src="set-bianca-bordo.jpg" alt="Set Bianca Bordo">
                <h2>Set Bianca Bordo</h2>
                <p class="price">$9000</p>
                <button>Añadir al carrito</button>
            </div>

</div>

</body>
</html>
