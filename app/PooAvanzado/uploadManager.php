<?php
/*
* Función que se encarga de subir un archivo y moverlo a la carpeta /pictures
* que almacena todas las fotos.
* Return: Devuelve la ruta final del archivo.
*/
uploadPicture();


function uploadPicture()
{
    //directorio donde subir las cosas sino existe lo crea y le da permisos
            $dir_upload = "./upload/";
            if (!file_exists($dir_upload)) {
                mkdir($dir_upload, 0777, true);
            }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if file was uploaded without errors
try{
        if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] == 0) {
            $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
            $filename = $_FILES["foto"]["name"];
            $filetype = $_FILES["foto"]["type"];
            $filesize = $_FILES["foto"]["size"];
            
            // Verify file extension
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            if (!array_key_exists($ext, $allowed)) {
                throw new U('División por cero.');
                echo "Error: " . $_FILES["foto"]["error"];
            }
            

            // Verify file size - 5MB maximum
            $maxsize = 5 * 1024 * 1024;
            if ($filesize > $maxsize) {
                echo "Error: " . $_FILES["foto"]["error"];

            }
            // Verify file size - 5MB maximum
            $maxsize = 5 * 1024 * 1024;
            if ($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

            // Verify MYME type of the file
            if (in_array($filetype, $allowed)) {
                // Check whether file exists before uploading it
                if (file_exists("upload/" . $filename)) {
                    echo $filename . " is already exists.";
                } else {
                    move_uploaded_file($_FILES["foto"]["tmp_name"], "upload/" . $filename);
                    echo "Your file was uploaded successfully.";
                }
            } else {
                echo "Error: There was a problem uploading your file. Please try again.";
            }
        } else {
            echo "Error: " . $_FILES["foto"]["error"];
        }
    }
    }catch(){
        header()
    }
}


/*
* Función que se encarga de añadir al archivo fotos.txt el titulo y la ruta de la
* fotografía recien subida
* Entradas:
*       $file_uploaded: La ruta del archivo
*       $title_uploaded: El titulo del archivo
* Return: null
*/

function addPictureToFile($file_uploaded, $title_uploaded)
{
}

/*
* Clase personalizada extendida de Exception que utilizaremos para lanzar errores
* en la subida de archivos. Por ejemplo:
* throw new UploadError("Error: Please select a valid file format.");
*/

class UploadError extends Exception
{


    // die("Error: Please select a valid file format.");
    //die("Error: File size is larger than the allowed limit.");
}
