<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

</body>
<!-- $contador =   -->

<?php
$loteria = $_POST['loteria'];
$buscandor = $_POST['buscanumero'];
$nCops = count(array_keys($loteria, $buscandor));
// var_dump($loteria);

echo $nCops;




?>

</html>