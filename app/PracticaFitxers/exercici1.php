<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fitxet_2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <div class="container">
        <div class="">
            <table class="table w-50 table-striped table-dark center">
                <thead>
                    <tr>
                        <th>Propietat</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <?php
                //directorio donde subir las cosas
                $dir_upload = "./upload/";
                //chekeo si a llegado el fichero del formularoi
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    //miramos si la global $_FILES esta creada y si tiene errores al subirlo 
                    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
                        echo '<tbody>';
                        //forech recorre un array de ficheros , el segundo array recorre dentro el fichero 
                        foreach ($_FILES as $key => $value) {
                            foreach ($value as $key2 => $value2) {
                                echo '<tr>
                            <td>' . $key2 . '</td>
                            <td>', $value2, '</td>
                            </tr>';
                            }
                        }
                        echo '</tbody>';

                        //si el directorio no existe lo crea i lo mueve
                        if (!file_exists($dir_upload)) {
                            mkdir($dir_upload, 0777, true);
                            move_uploaded_file($_FILES["file"]["tmp_name"], "./upload/" . $_FILES["file"]["name"]);
                        } else {
                            move_uploaded_file($_FILES["file"]["tmp_name"], "./upload/" . $_FILES["file"]["name"]);
                        }
                    } else {
                        echo "<p> Error: ", $_FILES["file"]["error"], "<p>";
                    }
                } else {
                    echo "Error: ", $_FILES["file"]["error"];
                }
                ?>
            </table>
        </div>
    </div>

</body>

</html>