<?php
/*
* Función que se encarga de subir un archivo y moverlo a la carpeta /pictures
* que almacena todas las fotos.
* Return: Devuelve la ruta final del archivo.
*/

function uploadPicture(){}

/*
* Función que se encarga de añadir al archivo fotos.txt el titulo y la ruta de la
* fotografía recien subida
* Entradas:
*       $file_uploaded: La ruta del archivo
*       $title_uploaded: El titulo del archivo
* Return: null
*/

function addPictureToFile($file_uploaded,$title_uploaded){}

/*
* Clase personalizada extendida de Exception que utilizaremos para lanzar errores
* en la subida de archivos. Por ejemplo:
* throw new UploadError("Error: Please select a valid file format.");
*/

class UploadError extends Exception{}

?>