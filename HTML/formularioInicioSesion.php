<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="../assets/css/formularioInicioSesion.css">
</head>

<body>
    <div class="login-container">
        <h2>Inicio de Sesión</h2>
        <?php
        session_start();
        $error = "";

        if (isset($_SESSION['error'])) {
            $error = $_SESSION['error'];
            unset($_SESSION['error']); // Elimina el error para que no se quede permanentemente
        }
        ?>
        <?php if (!empty($error)): ?>
            <p style="color: red; margin-bottom: 5px;"><?php echo $error; ?></p>
        <?php endif; ?>
        <form action="login.php" method="post">
            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" placeholder="Correo electrónico" required>

            <label for="password">Contraseña</label>
            <input type="text" id="password" name="password" placeholder="Contraseña" required>

            <button type="iniciar">Iniciar sesión</button>
        </form>
</body>
<p class="registro">¿Aún no tienes cuenta? <a href="formularioRegistro.php">Crea tu cuenta</a></p>
</div>

</html>