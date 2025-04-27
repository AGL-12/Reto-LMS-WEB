<?php
session_start();

// Cargar el XML
$xml = simplexml_load_file("../XML-XSD/RetoF.xml");

// Comprobar si el XML se ha cargado correctamente
if ($xml === false) {
    die('Error al cargar el archivo XML.');
}

// Recoger los datos del formulario
$nombre = $_POST['username'];
$email = $_POST['email'];
$dni = $_POST['Password'];
$telefono = $_POST['telefono'];

// Verificar si el usuario ya existe
$existe = false;
foreach ($xml->usuarios->usuario as $usuario) {
    if ((string)$usuario['dni'] === $dni) {
        $existe = true;
        break;
    }
}

if ($existe) {
    // Si el usuario ya existe
    $_SESSION['error'] = "El usuario ya existe.";
    header("Location: formularioRegistro.php");
    exit();
} else {
    // Crear un nuevo usuario
    $nuevoUsuario = $xml->usuarios->addChild('usuario');
    $nuevoUsuario->addAttribute('dni', $dni);
    $nuevoUsuario->addChild('nombre', $nombre);
    $nuevoUsuario->addChild('email', $email);
    $nuevoUsuario->addChild('telefono', $telefono);

    // Guardar el XML
    $xml->asXML("../data/datos.xml");

    // Redirigir a la página de éxito o login
    header("Location: formularioInicioSesion.php");
    exit();
}
?>