<?php
$host = "190.228.29.68";
$port = 3306;
$database = "db_proyecto_backend";
$username = "";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión a la base de datos: " . $e->getMessage());
}
?>
