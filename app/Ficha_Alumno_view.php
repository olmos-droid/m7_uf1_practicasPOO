<?php
include('Class/Upload.php');
include('Class/Persona.php');

$upload = new Upload("foto");
//Imprimimos la ruta de la imagen subida
echo $upload->__get($path);

$persona = new Persona();
$persona->__set($picture,($upload->__get($path)));

?>