<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto - Mallas y Lencería</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Barra de navegación (similar a alta_producto.php) -->

<!-- Contenido del formulario de edición de producto -->
<div class="container">
    <h2>Editar Producto</h2>
    <form action="procesar_editar_producto.php" method="post">
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
        <button type="submit">Guardar Cambios</button>
    </form>
</div>

</body>
</html>
