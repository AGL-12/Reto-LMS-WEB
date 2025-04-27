<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/CSS/index.css">
    <script src="../assets/js/xml-connection.js" type="module"></script>
    <title>EcoDrive</title>
</head>

<body>
    <?php
    include_once('header.php'); // Incluye el encabezado de la página
    ?>

    <div class="cover-container">
        <h1>EcoDrive</h1>
    </div>

    <main>
        <!-- Contenido dinámico cargado desde transformar_xml.php -->
        <div class="dynamic-content">
            <?php include_once('../XML-XSD/transformar_xml.php'); ?>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>Sobre Nosotros</h3>
                <p>PassNow es tu mejor opción para acceder a eventos de música, deportes, espectáculos y más.</p>
            </div>
            <div class="footer-section">
                <h3>Enlaces Rápidos</h3>
                <a href="index.php">Inicio</a>
                <a href="coches.php">Coches</a>
                <a href="motos.php">Motos</a>
                <a href="bicis.php">Bicicletas</a>
                <a href="patinete.php">Patinetes</a>
            </div>
            <div class="footer-section">
                <h3>Contacto</h3>
                <p>Email: EcoDrive@gmail.com</p>
                <p>Teléfono: +34 123 456 789</p>
            </div>
            <div class="footer-section social-media">
                <h3>Síguenos</h3>
                <a href="https://facebook.com" target="_blank"><img src="../assets/images/facebook.png" /></a>
                <a href="https://x.com" class="twitter-icon" target="_blank"><img src="../assets/images/x.png" alt="X" /></a>
                <a href="https://instagram.com" target="_blank"><img src="../assets/images/instagram.png" /></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 PassNow. Todos los derechos reservados.</p>
        </div>
    </footer>

</body>

</html>