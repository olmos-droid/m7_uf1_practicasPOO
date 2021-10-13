<?php
include('Class/Upload.php');
include('Class/Persona.php');
$nom = $_POST["name"];
$cognom = $_POST["surname"];
$comentaris = $_POST["comment"];
$adreça = $_POST["address"];
$path = "./upload/" . $_FILES["photo"]["name"];



$upload = new Upload($path);

//sube elarchivos
$upload->upload();


//Creamos un objeto persona
$persona = new Persona();
//seteamos los atributos incluido el foto
$persona->__set("foto", $upload->__get("name"));
$persona->__get("foto");
$persona->__set("name", $nom);
$persona->__set("surname", $cognom);
$persona->__set("comments", $comentaris);
$persona->__set("address", $adreça);




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <title>Ficha_Alumno_view</title>
</head>

<body>
<table class="table  w-50 table-striped table-dark center">
        <thead>
            <tr>
                <th>
                    Upload Person
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <img src=<?php echo $persona->__get("foto"); ?> alt="" width="400">
                </td>
            </tr>
            <tr>
                <td><?php echo $persona->__get("name"); ?></td>
            </tr>
            <tr>
                <td><?php echo $persona->__get("surname"); ?></td>
            </tr>
            <tr>
                <td><?php echo $persona->__get("address"); ?></td>
            </tr>
            <tr>
                <td><?php echo $persona->__get("comments"); ?></td>
            </tr>

        </tbody>
    </table>

</body>

</html>