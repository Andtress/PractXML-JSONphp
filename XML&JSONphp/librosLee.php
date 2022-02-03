<?php

//archivo a leer
$path = "libros.xml";
//Verificar que exista el archivo
if(!file_exists($path)){
    exit("El archivo no existe");
}
//Abrir el archivo
$xml = XMLReader::open($path);
//Crear la tabla
echo "<html><body><table border=1>",
echo "<tr><th>Titulo</th><th>Autor</th><th>Editorial</th><th>Precio</th><th>Fecha</th><th>Paginas</th></tr>";
//Iniciamos el ciclo para leer el archivo
while($xml->read()){
    if($xml->nodeType == XMLReader::ELEMENT && $xml->name == "libro"){
        $nombre = $xml->getAttribute("nombre");
        $autor = $xml->getAttribute("autor");
        $editorial = $xml->getAttribute("editorial");
        $precio = $xml->getAttribute("precio");
        $fecha = $xml->getAttribute("fecha");
        $paginas = $xml->getAttribute("paginas");
        //vaciamos la informacion en la tabla
        echo "<tr><td>".$nombre."</td><td>".$autor."</td><td>".$editorial."</td><td>".$precio."</td><td>".$fecha."</td><td>".$paginas."</td><td>";
    }
}
//Etiquetas de cierre
echo "</table></body></html>";
//Cerramos la conexion
$xml->close();
?>