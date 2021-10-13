<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form action="insertData.php" method="post">
        <h5>Generador de tabla</h5>
        <label for="player">Numero de jugadores:</label>
        <input type="number" name="player" id="">
        <label for="match">Numero de partidos</label>
        <input type="number" name="match" id="">
        <button type="submit" class="btn btn-primary">Generar</button>
    </form>

</body>

</html>