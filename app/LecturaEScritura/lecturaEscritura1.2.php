<?php
$textes = $_POST["data"];
$dir_upload="./subidas/";


var_dump($textes);

//si el directorio no existe lo crea i lo mueve
 if (!file_exists($dir_upload)) {
    mkdir($dir_upload, 0777, true);
    echo (' directorio creado');
 }

 
 for ($i=0; $i < 3; $i++) { 
     if($i==0){
         $file=fopen($dir_upload.$textes[$i],"w");
     }else{
         fputs($file,($textes[$i]."\n"));
     }
 }
 fclose($file);

 echo'se ha escrito correctamente';
 ?>