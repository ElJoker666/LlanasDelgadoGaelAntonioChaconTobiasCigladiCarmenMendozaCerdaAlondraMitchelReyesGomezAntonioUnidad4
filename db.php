<?php
// Parámetros de conexión
$host = 'dpg-ct3br7lumphs73dr1d70-a';
$port = 5432;
$dbname = 'login_system_66lz';
$username = 'login_system_66lz_user';
$password = 'WYW5f81ukbXhZzlPbRM836gEdtpkxHpO';

// Conexión con PDO
try {
    // Crear la cadena de conexión
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    
    // Establecer la conexión
    $pdo = new PDO($dsn, $username, $password);
    
    // Establecer el modo de error a excepción
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Conexión exitosa!";
} catch (PDOException $e) {
    echo "Error al conectar con la base de datos: " . $e->getMessage();
}
?>
