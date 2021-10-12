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
 
    <?php
    $num_player = $_POST['player'];
    $num_match = $_POST['match'];
    
    ?>
    <form action="generatorTableData.php" method="post">
    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <?php
                    for ($row = 0; $row < $num_match + 1; $row++) {
                        if ($row == 0) {
                            echo '<th scope="col"><input type="text" name="primera_row[]" value="Jugadors"></th>';

                        } else
                            
                            echo '<th scope="col"><input type="text" name="primera_row[]" value="Partido',$row,'"></th>';
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($row = 0; $row < $num_player ; $row++) {
                    echo '<tr>';
                    for ($col = 0; $col < $num_match + 1; $col++) {
                        
                        if ($col == 0) {
                            echo '<th scope="row">';
                            echo '<input type="text" name="nom_jugadors[]">';
                            echo '</th>';
                        } else {
                            echo '<td>';
                            echo '<input type="number" name="num_gols[',$row,'][',$col,']">';
                            echo '</td>';
                        }
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <input type="hidden" name="ncol" value="">
    <button type="submit"class="btn btn-primary">Generar taula</button>
    </form>
</body>

</html>