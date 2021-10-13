
<?php

class Upload
{
    private $name;

    function __construct($name)
    {
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
    public function getPath(){
        return $this->name;
    }
    // public function setName($valor){
    //     $this->name=$valor;
    // }


    /*
GETTERS & SETTERS
*/
    public function __set($propiedad, $valor)
    {
        if (property_exists($this, $propiedad)) {
            $this->$propiedad = $valor;
        }
    }
    public function __get($propiedad)
    {
        if (property_exists($this, $propiedad)) {
           return $this->$propiedad;
        }
        return null;
    }
}
