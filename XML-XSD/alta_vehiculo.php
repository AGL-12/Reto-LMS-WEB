<?php
// Ruta al archivo XML
$xmlFile = 'RetoF.xml';

// Verificar si se enviaron los datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario
    $tipo = $_POST['tipo']; // Tipo de vehículo (Coche, Moto, etc.)
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $autonomia = $_POST['autonomia'];
    $potencia = $_POST['potencia'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen'];

    // Cargar el archivo XML
    if (file_exists($xmlFile)) {
        $dom = new DOMDocument();
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        $dom->load($xmlFile);

        // Crear un nuevo nodo <vehiculo>
        $vehiculos = $dom->getElementsByTagName('vehiculos')->item(0);
        $nuevoVehiculo = $dom->createElement('vehiculo');
        $nuevoVehiculo->setAttribute('id', time()); // Usar la marca de tiempo como ID único
        $nuevoVehiculo->setAttribute('tipo', $tipo); // Usar el tipo seleccionado

        // Agregar los datos al nodo <vehiculo>
        $nuevoVehiculo->appendChild($dom->createElement('marca', $marca));
        $nuevoVehiculo->appendChild($dom->createElement('modelo', $modelo));
        $nuevoVehiculo->appendChild($dom->createElement('autonomia', $autonomia));
        $nuevoVehiculo->appendChild($dom->createElement('potencia', $potencia));
        $nuevoVehiculo->appendChild($dom->createElement('precio', $precio));
        $nuevoVehiculo->appendChild($dom->createElement('imagen', $imagen));

        // Insertar el nuevo nodo en <vehiculos>
        $vehiculos->appendChild($nuevoVehiculo);

        // Guardar los cambios en el archivo XML
        $dom->save($xmlFile);

        // Mostrar un mensaje de éxito
        echo "<h1>Vehículo agregado exitosamente</h1>";
        echo "<a href='../HTML/formulario_coche.html'>Agregar otro vehículo</a>";
    } else {
        echo "<h1>Error: No se encontró el archivo XML</h1>";
    }
} else {
    echo "<h1>Error: No se enviaron datos</h1>";
}
?>