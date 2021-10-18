<?php
class Tabla
{
    private $_mat = array();
    private $_cantFilas;
    private $_cantColumnas;
    function __construct($fil, $col)
    {

        $this->_cantColumnas = $col;
        $this->_cantFilas = $fil;
    }
    function cargar($fila, $columna, $valor)
    {
        $this->_mat[$fila][$columna] = $valor;
    }
    function graficar()
    {
        echo '<table>';
        echo '<tbody>';
        for ($i = 0; $i < $this->_cantFilas; $i++) {
            echo '<tr>';
            for ($j = 0; $j < $this->_cantColumnas; $j++) {
                echo '<td>';
                echo $this->_mat[$i][$j];
                echo '</td>';
            }
            echo '</tr>';
        }
        echo '</body>';
        echo '</table>';
    }
}
$tabla1 = new Tabla(2,3); //[filas][columnas]
$tabla1->cargar(0, 0, "1");
$tabla1->cargar(0, 1, "2");
$tabla1->cargar(0, 2, "3");
$tabla1->cargar(1, 0, "4");
$tabla1->cargar(1, 1, "5");
$tabla1->cargar(1, 2, "6");
$tabla1->graficar();