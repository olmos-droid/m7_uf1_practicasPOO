<?php
$dir_upload="./subidas/";
$filename =$_POST["data"];

if (!file_exists($dir_upload)) {
    mkdir($dir_upload, 0777, true);
    echo (' directorio creado');
 }
 if(!file_exists($dir_upload.$filename)){
    $fichero = fopen($dir_upload.$filename,"w");
    
    fputs($fichero,"line 1"."\n");
    fputs($fichero,"line 11"."\n");
    fputs($fichero,"line 111"."\n");
    fputs($fichero,"line 1111"."\n");
    fclose($fichero);
}

$ficheroRead=fopen($dir_upload.$filename,"r");
while(!feof($ficheroRead)){
$linea=fgets($ficheroRead);
echo $linea . "<br/>";
}
fclose($ficheroRead);


?>