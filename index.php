<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg,  #0077b6, #caf0f8, #90e0ef, #0077b6);
            font-family: 'Arial', sans-serif;
        }
        .card {
            border-radius: 15px;
        }
        .btn-primary {
            background-color: #2575fc;
            border: none;
        }
        .btn-primary:hover {
            background-color: #6a11cb;
        }
        a {
            text-decoration: none;
            color: #2575fc;
        }
        a:hover {
            color: #6a11cb;
        }
        h2 {
            color: #2575fc;
            font-weight: bold;
        }
    </style>
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="width: 22rem;">
        <h2 class="text-center mb-4">Bienvenido a la aplicación</h2>
        <div class="d-grid gap-2">
            <!-- Enlace a la página de Login -->
            <a href="login.php" class="btn btn-primary w-100">Iniciar sesión</a>
            <!-- Enlace a la página de Registro -->
            <a href="register.php" class="btn btn-secondary w-100">Registrar cuenta</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
