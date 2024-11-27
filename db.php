<?php
$host = '127.0.0.1';   // IP de tu base de datos
$db = 'login_system';  // Nombre de la base de datos
$user = 'root';        // Usuario de la base de datos
$password = '';        // Contraseña del usuario
$port = '33065';       // Puerto personalizado

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar con la base de datos: " . $e->getMessage());
}
?>
