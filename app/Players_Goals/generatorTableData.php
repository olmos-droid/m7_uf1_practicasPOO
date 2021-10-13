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

    <body>
        <?php
        $nom_jugadors = $_POST['nom_jugadors'];
        $num_gols = $_POST['num_gols'];
        $primera_row = $_POST['primera_row'];
        ?>
        <form action="generatorTableData.php" method="post">



            <table class="table  w-50 table-striped table-dark table-hover ">
                <thead>
                    <tr>
                        <?php
                        for ($row = 0; $row < count($primera_row); $row++) {
                            echo '
                                <th scope="col">', $primera_row[$row], '</th>';
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($row = 0; $row < count($nom_jugadors); $row++) {
                        echo '<tr>';
                        echo '<th scope="row">', $nom_jugadors[$row], '</th>';
                        for ($col = 1; $col < count($primera_row); $col++) {

                            echo '<div class="col-xs-1 text-center"> <td class="">', $num_gols[$row][$col], '</td></div>';
                        }
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>

        </form>
    </body>

</body>

</html>