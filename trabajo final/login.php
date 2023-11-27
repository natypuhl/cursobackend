<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión - Corazón de León</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>


<div class="container">
    <h2>Iniciar Sesión</h2>
    <form action="procesar_login.php" method="post">
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Iniciar Sesión</button>
    </form>
</div>

</body>
</html>
