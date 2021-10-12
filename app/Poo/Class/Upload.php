<?php
define('RUTA', './upload/');

class Upload
{
    private $name;

    function __contructor($name)
    {
        if (file_exists(RUTA)) {
        }
        $this->name = $name;
    }

    /*
  * upload: Función que hace las operaciones necesarias para subir el archivo
  * al servidor
  */
    public function upload()
    {
        //directorio donde subir las cosas
        $dir_upload = "./upload/";

        if (!file_exists($dir_upload)) {
            mkdir($dir_upload, 0777, true);
        }
        move_uploaded_file($_FILES["photo"]["tmp_name"], "./upload/" . $_FILES["photo"]["name"]);
    }


    /*
    GETTERS & SETTERS
    */
    public function __set($propiedad, $valor)
    {
        if (property_exists($this, $propiedad)) {
            return $this->$propiedad = $valor;
        }
        return null;
    }
    public function __get($propiedad)
    {
        if (property_exists($this, $propiedad)) {
            return $this->$propiedad;
        }
        return null;
    }
}
/*
* OPCIONAL:
* Clase personalizada extendida de Exception que utilizaremos para lanzar errores
* en la subida de archivos. Por ejemplo:
* throw new UploadError("Error: Please select a valid file format.");
*/
class UploadError extends Exception
{
}
