<?php

Class Titulo{
    private $_titulo;
    private $_position;
    private $_bg;
    private $_font;

    function __construct($titulo,$pos,$bg,$font)
    {
        $this->_titulo= $titulo;
        $this->_position = $pos;
        $this->_bg = $bg;
        $this->_font = $font;
    }
    function mostrar(){
        echo '<h1 align="'.$this->_position.'" style="background-color:'.$this->_bg.'; color:'.$this->_font.'">'.$this->_titulo.'</h1>';
    }

}

$titulo = new Titulo("Esto es un titulo","center","black","white");
$titulo->mostrar();
$titulo2 = new Titulo("Esto es un titulo","right","black","white");
$titulo2->mostrar();
$titulo3 = new Titulo("Esto es un titulo","left","black","white");
$titulo3->mostrar();
?>