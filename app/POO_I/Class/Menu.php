<?php

class Menu
{
    private $enlaces = array();
    private $titulos = array();

    public function cargarOpcion($en, $tit)
    {
        $this->enlaces[] = $en;
        $this->titulos[] = $tit;
    }
    function mostrar()
    {
  for ($i=0; $i < count($this->enlaces); $i++) { 
      echo '<a href="'.$this->enlaces[$i].'"> '. $this->titulos[$i] .' </a>';
  }
    }
}

$menu = new Menu();
$menu->cargarOpcion("www.google.com", "google");
$menu->cargarOpcion("www.facebook.com", "facebook");
$menu->cargarOpcion("www.firefox.com", "firefox");
$menu->cargarOpcion("www.instagram.com", "instagram");
$menu->mostrar();
