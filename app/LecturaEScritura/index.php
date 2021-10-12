<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>


<body>
    <form action="lecturaEscritura2.1.php" method="post">
        <table class="table  w-50 table-striped table-dark center">
            <thead></thead>
            <tbody>
                <tr>
                    <td>
                        <div class="">
                            <label for="filename">nom del fitxer</label>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <input type="text" name="data" id="data1">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <div class="">
                            <button type="submit" class="btn btn-outline-light">Enviar</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>

</body>

</html>