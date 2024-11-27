<?php
session_start();
require 'db.php';

// Obtener datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

try {
    // Buscar usuario en la base de datos
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Validar contraseña
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: dashboard.php");
        exit;
    } else {
        echo "<script>alert('Usuario o contraseña incorrectos.'); window.location.href = 'login.php';</script>";
    }
} catch (PDOException $e) {
    die("Error al validar usuario: " . $e->getMessage());
}
?>
