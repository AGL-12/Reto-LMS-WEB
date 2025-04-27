<!-- filepath: c:\xampp\htdocs\PaginaWebHTMLyCSSCargaPHP\XML-XSD\modificar_vehiculo.php -->
<?php
// Ruta al archivo XML
$xmlFile = 'RetoF.xml';

// Verificar si se enviaron los datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario
    $id = $_POST['id']; // ID del vehículo a modificar
    $tipo = $_POST['tipo'];
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

        // Buscar el vehículo por ID
        $vehiculos = $dom->getElementsByTagName('vehiculo');
        foreach ($vehiculos as $vehiculo) {
            if ($vehiculo->getAttribute('id') === $id) {
                // Modificar los datos del vehículo
                $vehiculo->setAttribute('tipo', $tipo);
                $vehiculo->getElementsByTagName('marca')->item(0)->nodeValue = $marca;
                $vehiculo->getElementsByTagName('modelo')->item(0)->nodeValue = $modelo;
                $vehiculo->getElementsByTagName('autonomia')->item(0)->nodeValue = $autonomia;
                $vehiculo->getElementsByTagName('potencia')->item(0)->nodeValue = $potencia;
                $vehiculo->getElementsByTagName('precio')->item(0)->nodeValue = $precio;
                $vehiculo->getElementsByTagName('imagen')->item(0)->nodeValue = $imagen;

                // Guardar los cambios en el archivo XML
                $dom->save($xmlFile);

                // Mostrar un mensaje de éxito
                echo "<h1>Vehículo modificado exitosamente</h1>";
                echo "<a href='../HTML/formulario_modificar_vehiculo.html'>Modificar otro vehículo</a>";
                exit;
            }
        }

        // Si no se encuentra el vehículo
        echo "<h1>Error: No se encontró el vehículo con ID $id</h1>";
    } else {
        echo "<h1>Error: No se encontró el archivo XML</h1>";
    }
} else {
    echo "<h1>Error: No se enviaron datos</h1>";
}
?>