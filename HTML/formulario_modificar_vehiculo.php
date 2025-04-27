<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Vehículo</title>
    <link rel="stylesheet" href="../CSS/patinete.css">
</head>
<body>
    <header class="header">
        <h1>Modificar un Vehículo</h1>
    </header>
    <main>
        <form action="../XML-XSD/modificar_vehiculo.php" method="POST">
            <label for="id">Seleccionar Vehículo (ID):</label>
            <select id="id" name="id" required>
                <?php
                // Cargar los vehículos desde el archivo XML
                $xmlFile = '../XML-XSD/RetoF.xml';
                if (file_exists($xmlFile)) {
                    $dom = new DOMDocument();
                    $dom->load($xmlFile);
                    $vehiculos = $dom->getElementsByTagName('vehiculo');
                    foreach ($vehiculos as $vehiculo) {
                        $id = $vehiculo->getAttribute('id');
                        $tipo = $vehiculo->getAttribute('tipo');
                        $marca = $vehiculo->getElementsByTagName('marca')->item(0)->nodeValue;
                        $modelo = $vehiculo->getElementsByTagName('modelo')->item(0)->nodeValue;
                        echo "<option value='$id'>$tipo - $marca $modelo (ID: $id)</option>";
                    }
                } else {
                    echo "<option value=''>No se encontraron vehículos</option>";
                }
                ?>
            </select><br><br>

            <label for="tipo">Tipo de Vehículo:</label>
            <select id="tipo" name="tipo" required>
                <option value="Coche">Coche</option>
                <option value="Moto">Moto</option>
                <option value="Patinete">Patinete</option>
                <option value="Bicicleta">Bicicleta</option>
            </select><br><br>

            <label for="marca">Marca:</label>
            <input type="text" id="marca" name="marca" required><br><br>

            <label for="modelo">Modelo:</label>
            <input type="text" id="modelo" name="modelo" required><br><br>

            <label for="autonomia">Autonomía (km):</label>
            <input type="number" id="autonomia" name="autonomia" required><br><br>

            <label for="potencia">Potencia (CV):</label>
            <input type="number" id="potencia" name="potencia" required><br><br>

            <label for="precio">Precio (€):</label>
            <input type="number" id="precio" name="precio" required><br><br>

            <label for="imagen">Ruta de la Imagen:</label>
            <input type="text" id="imagen" name="imagen" required><br><br>

            <button type="submit">Modificar Vehículo</button>
        </form>
    </main>
</body>
</html>