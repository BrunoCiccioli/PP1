<?php
$MiObjeto= new stdClass();
$MiObjeto->Usuario=$_GET['usuario'];
$MiObjeto->Contraseña=$_GET['contraseña'];
$archivo=fopen('usuarios.txt', 'a');
fwrite($archivo,json_encode($MiObjeto)."\n");
fclose($archivo);
?>