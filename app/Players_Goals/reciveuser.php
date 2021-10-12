<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['op'];
    $resul; ?>

    <div class="container w-25">
        <h5>Recibido de index.php</h5>
        <div class="div">
            <label for="nom">Numero 1</label>
            <input type="text" name="nom1" value="<?php echo $num1 ?>" class="input-group mb-3 col-sm-2 col-form-label">
            <label for="num2">Numero 2</label>
            <input type="text" name="num2" value="<?php echo $num2 ?>" class="input-group mb-3 col-sm-2 col-form-label">

            <?php

            switch ($op) {
                case '+':
                    # code...
                    $resul = $num1 + $num2;

                    break;
                case '-':
                    # code...
                    $resul = $num1 - $num2;
                    break;
                case '*':
                    # code...
                    $resul = $num1 * $num2;
                    break;
                case '4':
                    # code...
                    $resul = $num1 / $num2;
                    break;
                default:
                    # code...
                    break;
            }
            ?>
            <div class="div">
                <label for="resul">Resultat</label>
                <input type="text" name="resul" name="resul" value="<?php echo $resul ?>" class="input-group mb-3 col-sm-2 col-form-label">
            </div>
        </div>





    </div>
</body>