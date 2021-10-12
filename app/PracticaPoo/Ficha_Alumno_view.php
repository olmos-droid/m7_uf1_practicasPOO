<?php
include('Class/Upload.php');
include('Class/Persona.php');
if($_SERVER["REQUEST_METHOD"] == "POST"){
echo ('formulario recivido');
$name ->$_POST["name"];
echo "name:".$name;
$surbane ->$_POST["surname"];
$address ->$_POST["address"];
$comment ->$_POST["comment"];
}



$filename ->$_FILES["photo"]["name"];

$upload = new Upload("foto");
//Imprimimos la ruta de la imagen subida
echo $upload->__get($path);

$persona = new Persona();
$persona->__set($foto,($upload->__get($path)));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha_Alumno_view</title>
</head>
<body>
    
</body>
</html>