<?php
include ('PictureClass.php');
class Gallery
{
    private $_gallery = [];
    private $_filename;

  /*Constructor: Recibe la ruta del archivo fotos.txt*/
    function __construct($fileName){
      $this->_filename = $fileName;
    }


    /*
  *Recorre el archivo fotos.txt y para cada titulo_ubicacion$titulo_ubicaciona, crea un
  *elemento Picture que lo añade al atributo $_gallery[]
  */
    function loadGallery(){
      $file = fopen($this->_filename,"r");
      while(!feof($file)){
        $line= explode("###",fgets($file));
        $titulo = $line[0];
        // echo ' el titulo es : '. $titulo;
        $ubicacion = $line[1];
       
        $picture = new Picture("heyhey","holaquetal");
        // echo $picture->__get('title');
        // echo $picture->__get('filename');
      print_r($picture);
      }
    }

    /*
  *Getters.
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