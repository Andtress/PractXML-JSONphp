<?php

$path = "alumnos2.json";
//Crear el archivo
$file = fopen($path, "w");

$alumnos= array(
    array("nombre" => "Juan","cali"=>"9.5"),
    array("nombre" => "Maria","cali"=>"8.6")
);
//Convertirlo en JSON
$json = json_encode($alumnos);
//Guardarlo
fwrite($file, $json);
//Cerrar el archivo
fclose($file);
?>