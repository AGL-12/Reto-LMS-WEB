<?php

declare(strict_types=1);
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$xml = simplexml_load_file("../XML-XSD/RetoF.xml");

if ($xml === false) {
    die("Error al cargar el archivo XML.");
}
$usuarioEncontrado = null;

// ACCESO CORRECTO A LOS USUARIOS
foreach ($xml->usuarios->usuario as $usuario) {
    // Vamos a suponer que estás usando el DNI como contraseña por ahora
    if ((string)$usuario->email == $email && (string)$usuario['dni'] == $password) {
        $usuarioEncontrado = $usuario;
        break;
    }
}

if ($usuarioEncontrado !== null) {
    $_SESSION['usuario'] = (string)$usuarioEncontrado->nombre;
    // Si el usuario se encuentra, crear cookies válidas por 1 hora (3600 segundos)
    setcookie("dni", (string)$usuarioEncontrado['dni'], time() + 3600, "/");
    setcookie("nombre", (string)$usuarioEncontrado->nombre, time() + 3600, "/");
    setcookie("email", (string)$usuarioEncontrado->email, time() + 3600, "/");
    setcookie("telefono", (string)$usuarioEncontrado->telefono, time() + 3600, "/");

    // Redirigir al index.php
    header("Location: index.php");
    exit();
} else {
    // Si no se encuentra el usuario, redirigir a la página de inicio de sesión con un mensaje de error
    $_SESSION['error'] = "Usuario o contraseña incorrectos.";
    header("Location: formularioInicioSesion.php");
    exit();
}
