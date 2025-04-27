<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Vehículo</title>
    <link rel="stylesheet" href="../CSS/patinete.css">
</head>
<body>
    <header class="header">
        <h1>Dar de Alta un Nuevo Vehículo</h1>
    </header>
    <main>
        <form action="../XML-XSD/alta_vehiculo.php" method="POST">
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

            <button type="submit">Agregar Vehículo</button>
        </form>
    </main>
</body>
</html>