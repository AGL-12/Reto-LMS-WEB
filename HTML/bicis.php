<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/patinete.css">
    <title>PassNow - Bicicletas</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="btn-menu">
                <label for="btn-menu">☰Categorías</label>
            </div>
            <nav class="menu">
                <input type="text" placeholder="Buscar bicicletas, deportes, espectáculos o parques temáticos" />
                <button><img src="../imagenes/lupa.png" width="16" height="16"/></button>
                <a href="ayuda.html" class="menu-item">Ayuda</a>
                <a href="formularioInicioSesion.html" class="menu-item">Iniciar sesión</a>
            </nav>
        </div>
    </header>

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
        <!-- Contenido dinámico cargado desde transformar_bicicletas.php -->
        <div class="dynamic-content">
            <?php include('../XML-XSD/transformar_bicicletas.php'); ?>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>Sobre Nosotros</h3>
                <p>PassNow es tu mejor opción para acceder a bicicletas eléctricas, deportes, espectáculos y más.</p>
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
                <p>Email: passnow00@gmail.com</p>
                <p>Teléfono: +34 123 456 789</p>
            </div>
            <div class="footer-section social-media">
                <h3>Síguenos</h3>
                <a href="https://facebook.com" target="_blank"><img src="../imagenes/facebook.png"></a>
                <a href="https://x.com" class="twitter-icon" target="_blank"><img src="../imagenes/x.png" alt="X"></a>
                <a href="https://instagram.com" target="_blank"><img src="../imagenes/instagram.png"></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 PassNow. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>