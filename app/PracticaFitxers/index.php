<!-- <?php
        phpinfo();
        ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <title></title>
</head>

<body>
    <div class="container">
        <h1> Exercici 1</h1>
        <div>
            <form action="exercici1.php" method="post" enctype="multipart/form-data">
                <table class="table  w-50 table-striped table-dark center">
                    <tbody>
                        <tr>
                            <td>Afegir ficher</td>
                            <td>
                                <input type="file" name="file" id="">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="btn btn-outline-light" id="btn-submit">Upload</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    <div class="container">
        <h1> Exercici 2</h1>
        <div>
            <form action="exercici2.php" method="post" enctype="multipart/form-data">
                <table class="table  w-50 table-striped table-dark center">
                    <tbody>
                        <tr>
                            <td>Afegir varis fitchers</td>
                            <td>
                                <input type="file" name="files[]" id="" multiple="">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="btn btn-outline-light" id="btn-submit">Upload</button>
                            </td>
                        </tr>
                        <tr>
                            <?php
                            var_dump($_FILES);
                            ?>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</body>

</html>