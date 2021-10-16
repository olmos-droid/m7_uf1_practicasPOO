<?php
Class Employer{

    private $_nombre;
    private $_sueldo;


    function inicializar($nombre,$sueldo){
        $this->_nombre = $nombre;
        $this->_sueldo = $sueldo;

    }
    function debePagarImpuestos(){
        echo $this->_nombre;
        if($this->_sueldo>3000){
           return true;
        }
        return false;
    }

}


?>