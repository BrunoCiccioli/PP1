<?php
echo "Su nombre es ".$_GET['nombre']; 
echo "Su apellido es ".$_GET['apellido']; 
$archivo=fopen('usuarios.txt', 'a');
fwrite($archivo, $_GET['nombre']. "\n");
fclose($archivo);
$MiObjeto=new stdClass();
$MiObjeto->nombre="Roberto";
$MiObjeto->apellido="Carlos";


var_dump($MiObjeto);
?>