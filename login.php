<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
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
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-4" style="width: 22rem;">
        <h2 class="text-center mb-4">Login</h2>
        <form action="validate.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" 
                       aria-label="Enter your username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" 
                       aria-label="Enter your password" required>
            </div>       
            <button type="submit" class="btn btn-primary w-100" aria-label="Login button">Login</button> 
            <p class="text-center mt-3">
                <a href="register.php">¿No tienes una cuenta? Regístrate</a><br>
                <a href="index.php">Regresar al index</a>
            </p>
        </form>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
