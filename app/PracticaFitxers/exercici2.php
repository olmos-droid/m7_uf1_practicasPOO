<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">

    <?php
    $dir_upload = "./upload/";
    $files = $_FILES;
    ?>

</head>

<body>

    <div class="container">
        <div class="">
            <table class="table w-50 table-striped table-dark center">
                <thead>
                    <tr>
                        <th>Nombre del fichero</th>
                        <th>Propiedad</th>
                        <th>Valor</th>
                    </tr>
                </thead>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // print_r($_FILES);
                    print_r($_FILES["files"]["name"]["0"]);
                    // if (isset($_FILES["files"]) && $_FILES["files"]["error"] == 0) {
                    echo '<tbody>';
                    foreach ($_FILES as $files => $filename) {
                        foreach ($filename as $name => $name_file) {
                            foreach ($name_file as $nom => $value) {
                                echo $value;
                                echo '<tr>
                                <td colspan="2" align="center>
                                ' . $value . '
                                </td>
                                </tr>';
                            }
                            echo '<tr>
                                <td colspan="2" align="center>
                                ' . $name_file . '
                                </td>
                                </tr>';
                        }
                        echo '<tr>
                                <td colspan="2" align="center>
                                ' . $arrayValors . '
                                </td>
                                </tr>';
                        foreach ($arrayValors as $key => $value) {
                            echo '<tr>
                                    <td>' . $key . '</td>
                                    <td>' . $valor . '</td>
                                    </tr>';
                        }
                    }
                    // } else {
                    // echo "Error 01: ", $_FILES["file"]["error"];
                    // }
                } else {
                    echo "Error: 02 ", $_FILES["file"]["error"];
                }
                ?>
                <tr>
                    <td>nombre del fichero</td>
                    <td>propiedad</td>
                    <td>valor</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>