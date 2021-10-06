<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <form action="Ficha_Alumno_view.php" method="post">
        <table class="table  w-50 table-striped table-dark center">
            <thead>
                <tr>
                    <th colspan="2" align="center">
                        Upload Persona
                    </th>
                </tr>
            </thead>
            <tbody>
                <div class="">
                    <tr>
                        <td>
                            <label class="form-control" for="name">Name</label>
                        </td>
                        <td>
                            <input class="form-control" type="text" name="persona[]" id="name">

                        </td>
                    </tr>
                </div>
                <div class="">
                    <tr>
                        <td>
                            <label class="form-control" for="surname">Surname</label>
                        </td>
                        <td>
                            <input class="form-control" type="text" name="persona[]" id="surname">
                        </td>
                    </tr>
                </div>
                <div class="">
                    <tr>
                        <td>
                            <label class="form-control" for="address">Address</label>
                        </td>
                        <td>
                            <input class="form-control" type="text" name="persona[]" id="address">
                        </td>
                    </tr>
                </div>
                <div class="">
                    <tr>
                        <td>
                            <label class="form-control" for="comment">Comment</label>
                        </td>
                        <td>
                            <input class="form-control" type="text" name="persona[]" id="comment">
                        </td>
                    </tr>
                </div>
                <tr>
                    <div class="input-group mb-3">
                        <td></td>

                        <td>
                            <input type="file" name="persona[]" class="form-control" id="inputGroupFile01">
                        </td>
                    </div>
                </tr>

            </tbody>
        </table>

    </form>


</body>

</html>