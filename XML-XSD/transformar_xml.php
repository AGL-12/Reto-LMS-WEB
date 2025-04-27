<?php
// Ruta del archivo XML
$xml_file = __DIR__ . '/RetoF.xml';

// Ruta del archivo XSLT
$xsl_file = __DIR__ . '/Novedades.xslt';

// Verificar si los archivos existen
if (!file_exists($xml_file)) {
    die("Error: No se encontró el archivo XML en la ruta especificada: $xml_file");
}

if (!file_exists($xsl_file)) {
    die("Error: No se encontró el archivo XSLT en la ruta especificada: $xsl_file");
}

// Cargar el archivo XML
$xml = new DOMDocument();
if (!$xml->load($xml_file)) {
    die("Error: No se pudo cargar el archivo XML.");
}

// Cargar el archivo XSLT
$xsl = new DOMDocument();
if (!$xsl->load($xsl_file)) {
    die("Error: No se pudo cargar el archivo XSLT.");
}

// Configurar el procesador XSLT
$proc = new XSLTProcessor();
$proc->importStylesheet($xsl);

// Transformar el XML usando el XSLT y mostrar el resultado
$result = $proc->transformToXML($xml);
if (!$result) {
    die("Error: No se pudo transformar el XML usando el XSLT.");
}

echo $result;
?>