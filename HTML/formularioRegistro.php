<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../assets/css/formularioRegistro.css">
</head>

<body>
    <div class="login-container">
        <h2>Registro</h2>
        <form action="registro.php" method="post">
            <label for="username">Nombre de usuario</label>
            <input type="text" id="username" name="username" placeholder="Nombre de usuario" required>

            <label for="password">Dni</label>
            <input type="text" id="password" name="Password" placeholder="Dni" required>

            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" placeholder="Correo electrónico" required>

            <label for="telefono">Teléfono</label>
            <input type="text" id="telefono" name="telefono" placeholder="Teléfono" required>

            <button type="submit">Crear Cuenta</button>
        </form>
        <p class="registro">¿Ya tienes cuenta? <a href="formularioInicioSesion.php">Inicia sesión</a></p>
    </div>
</body>

</html>