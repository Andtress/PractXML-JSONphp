<?php
// XMLWriter crea un objecto escritura XML
// XMLWriter::openURI(path) establece el URI de salida para el contenido  XML que se generara.
// XMLWriter::flush escribe dicha entrada

$path = "libros2.xml";

$writer = new XMLWriter();
$writer->openURI($path);
$writer->startDocument('1.0');

$writer->startElement('libros');

$writer->startElement('libro');
//Escribir el valor de un atributo
$writer->writeAttributte('nombre', 'El llano en llamas');
$writer->writeAttributte('autor', 'Juan Rulfo');
$writer->writeAttributte('editorial', 'Era');
$writer->writeAttributte('fecha', '1999');
$writer->writeAttributte('paginas', '200');
$writer->writeAttributte('precio', '200.00');
$writer->endElement();

$writer->startElement('libro');
$writer->writeAttributte('nombre', 'El llano en llamas');
$writer->writeAttributte('autor', 'Juan Rulfo');
$writer->writeAttributte('editorial', 'Era');
$writer->writeAttributte('fecha', '1999');
$writer->writeAttributte('paginas', '200');
$writer->writeAttributte('precio', '200.00');
$writer->endElement();

//este endelement cierra el startelement de libros
$writer->endElement();

$writer->endDocument();

$writer->flush();

?>