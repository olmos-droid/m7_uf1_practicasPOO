<?php

class Menu{
    private $links=array();


    function cargarOpcion($link){
        array_push($links,$link);
    }
    function mostrar(){
        foreach ($this->links as $key => $value) {
            echo '<a>'.$key . $value.'</a>';
        }
    }


}

$menu = new Menu();
$menu->cargarOpcion("www.google.com");
$menu->cargarOpcion("www.facebook.com");
$menu->cargarOpcion("www.firefox.com");
$menu->cargarOpcion("www.instagram.com");
$menu->mostrar();
?>