<?php
class Picture
{
    private $title;
    private $filename;
    /*Constructor*/
    function __construct($title, $fileName){
        $this->title=$title;
        $this->filename=$fileName;
    }
    /*
  *Getters. Lo que quiere decir que los atributos de
  *title y filename son private
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
?>