<?php
session_start();
$usuario = $_SESSION['usuario'] ?? null;
?>
<header class="header">
    <div class="container">
        <div class="btn-menu">
            <label for="btn-menu">☰Categorías</label>
        </div>
        <nav class="menu">
            <input type="text" placeholder="Buscar música, deportes, espectáculos o parques temáticos" />
            <button><img src="../assets/images/lupa.png" width="16" height="16" /></button>
            <a href="ayuda.html" class="menu-item">Ayuda</a>
            <?php if ($usuario): ?>
                <a href="logout.php">Cerrar sesión</a>
            <?php else: ?>
                <a href="formularioInicioSesion.php" class="menu-item">Iniciar sesión</a>
            <?php endif; ?>
        </nav>
    </div>
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
                <img src="../assets/images/LogoEcodrive.png" width="250" height="250" />
            </nav>
            <label for="btn-menu"><img src="../assets/images/atras.png" width="35" height="35" /></label>
        </div>
    </div>
</header>