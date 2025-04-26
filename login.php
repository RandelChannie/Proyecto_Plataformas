<?php
// login.php
//require 'conexion.php';
//session_start(); // Iniciar sesión para manejar usuarios logueados

// Verificar si se envió el formulario
//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //  $username = $_POST['username'] ?? '';
    //$password = $_POST['password'] ?? '';
//
    // Buscar el usuario en la base de datos
  //  $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username LIMIT 1");
    //$stmt->execute(['username' => $username]);
   // $user = $stmt->fetch(PDO::FETCH_ASSOC);

    //if ($user) {
      //  if (password_verify($password, $user['password'])) {
        //    $_SESSION['user_id'] = $user['id'];
          //  $_SESSION['username'] = $user['username'];

            //echo "<div class='alert alert-success'>¡Login exitoso! Bienvenido " . htmlspecialchars($user['username']) . "</div>";
            // header("Location: dashboard.php");
            //exit;
       // } else {
        //    echo "<div class='alert alert-danger'>Contraseña incorrecta.</div>";
       // }
   // } else {
       // echo "<div class='alert alert-danger'>Usuario no encontrado.</div>";
   // }
//}
//?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="estilos/estilologin.css">
    <style>
        /* Estilos adicionales para los mensajes de alerta */
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
            text-align: center;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Iniciar Sesión</h2>
    <form method="POST" action="login.php">
        <div class="form-group">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required autofocus>
        </div>
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="btn-login">Entrar</button>
    </form>
</div>

</body>
</html>