<?php
include('PictureClass.php');
class Gallery
{
  private $_gallery = array();
  private $_filename;

  /*Constructor: Recibe la ruta del archivo fotos.txt*/
  function __construct($filename)
  {
    $this->_filename = $filename;
  }
  /*
  *Recorre el archivo fotos.txt y para cada titulo_ubicacion$titulo_ubicaciona, crea un
  *elemento Picture que lo añade al atributo $_gallery[]
  */
  function loadGallery()
  {
    if (!file_exists($this->_filename)) {
      fopen($this->_filename, 0777, true);
    }
    $fileArray = file($this->_filename);
    $file = fopen($this->_filename, "r");

    for ($i = 0; $i < count($fileArray); $i++) {
      $line = explode("###", fgets($file));
      $picture = new Picture($line[0], $line[1]);
      array_push($this->_gallery, $picture);
      
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
