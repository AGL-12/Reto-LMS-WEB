<?php
$xml_file = __DIR__ . '/RetoF.xml';
$xsl_file = __DIR__ . '/bicicletas.xslt';

if (!file_exists($xml_file)) {
    die("Error: No se encontró el archivo XML en la ruta especificada: $xml_file");
}

if (!file_exists($xsl_file)) {
    die("Error: No se encontró el archivo XSLT en la ruta especificada: $xsl_file");
}

$xml = new DOMDocument();
if (!$xml->load($xml_file)) {
    die("Error: No se pudo cargar el archivo XML.");
}

$xsl = new DOMDocument();
if (!$xsl->load($xsl_file)) {
    die("Error: No se pudo cargar el archivo XSLT.");
}

$proc = new XSLTProcessor();
$proc->importStylesheet($xsl);

$result = $proc->transformToXML($xml);
if (!$result) {
    die("Error: No se pudo transformar el XML usando el XSLT.");
}

echo $result;
?>