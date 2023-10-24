<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta de Producto - Mallas y Lencería</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Barra de navegación -->
<nav class="navbar">
    <div class="container">
        <h1>Mallas y Lencería</h1>
        <ul>
            <li><a href="alta_producto.php">Alta de Producto</a></li>
            <li><a href="editar_producto.php">Editar Producto</a></li>
        </ul>
    </div>
</nav>

<!-- Contenido del formulario de alta de producto -->
<div class="container">
    <h2>Alta de Producto</h2>
    <form action="procesar_alta_producto.php" method="post">
        <label for="nombre">Nombre del Producto:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="color">Color:</label>
        <input type="text" id="color" name="color" required><br>
        <label for="talle">Talle:</label>
        <input type="text" id="talle" name="talle" required><br>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" required><br>
        <label for="tipo">Tipo de Producto:</label>
        <input type="text" id="tipo" name="tipo" required><br>
        <button type="submit">Guardar Producto</button>
    </form>
</div>

</body>
</html>
