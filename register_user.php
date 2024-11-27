<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Validar que los campos no estén vacíos
    if (empty($username) || empty($password)) {
        echo "<script>alert('Por favor completa todos los campos.'); window.location.href = 'register.php';</script>";
        exit;
    }

    try {
        // Verificar si el usuario ya existe
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user_exists = $stmt->fetchColumn();

        if ($user_exists) {
            echo "<script>alert('El nombre de usuario ya está en uso.'); window.location.href = 'register.php';</script>";
            exit;
        }

        // Guardar el usuario en la base de datos
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashed_password);
        $stmt->execute();

        echo "<script>alert('Registro exitoso. Ahora puedes iniciar sesión.'); window.location.href = 'login.php';</script>";
    } catch (PDOException $e) {
        die("Error al registrar usuario: " . $e->getMessage());
    }
}
?>
