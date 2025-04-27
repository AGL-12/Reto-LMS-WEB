<!-- filepath: c:\xampp\htdocs\PaginaWebHTMLyCSSCargaPHP\HTML\coches.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/CSS/patinete.css">
    <title>PassNow - Coches Eléctricos</title>
</head>
<body>
    <?php
    include_once('header.php'); // Incluye el encabezado de la página
    ?>

    <!-- Contenedor de EcoDrive -->
    <div class="cover-container">
        <h1>EcoDrive</h1>
    </div>

    <div class="capa"></div>

    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
                <div class="container">
                    <h1>Categorías</h1>
                </div>
                <a href="index.php" class="menu-item">Inicio</a>
                <a href="coches.php">Coches</a>
                <a href="motos.php">Motos</a>
                <a href="bicis.php">Bicicletas</a>
                <a href="patinete.php">Patinetes</a>
                <img src="../imagenes/logo.png" width="250" height="250"/>
            </nav>
            <label for="btn-menu"><img src="../imagenes/atras.png" width="35" height="35" /></label>
        </div>
    </div>

    <main>
        <!-- Contenido dinámico cargado desde transformar_coches.php -->
        <div class="dynamic-content">
            <?php include('../XML-XSD/transformar_coches.php'); ?>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>Sobre Nosotros</h3>
                <p>EcoDrive es tu mejor opción para acceder a los vehículos eléctricos más innovadores del mercado.</p>
            </div>
            <div class="footer-section">
                <h3>Enlaces Rápidos</h3>
                <a href="index.html">Inicio</a>
                <a href="coches.html">Coches</a>
                <a href="motos.html">Motos</a>
                <a href="patineta.html">Patinetes</a>
                <a href="bicis.html">Bicicletas</a>
            </div>
            <div class="footer-section">
                <h3>Contacto</h3>
                <p>Email: ecodrive@gmail.com</p>
                <p>Teléfono: +34 987 654 321</p>
            </div>
            <!-- Sección de redes sociales -->
            <div class="footer-section social-media">
                <h3>Síguenos</h3>
                <a href="https://facebook.com" target="_blank"><img src="../imagenes/facebook.png"></a>
                <a href="https://x.com" class="twitter-icon" target="_blank"><img src="../imagenes/x.png" alt="X"></a>
                <a href="https://instagram.com" target="_blank"><img src="../imagenes/instagram.png"></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 EcoDrive. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>