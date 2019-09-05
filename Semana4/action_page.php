<?php
echo "Su nombre es ".$_GET['nombre']; 
echo "Su apellido es ".$_GET['apellido']; 
$MiObjeto=new stdClass();
$MiObjeto->nombre=$_GET['nombre'];
$MiObjeto->apellido=$_GET['apellido'];




var_dump(json_encode($MiObjeto));
$archivo=fopen('usuarios.txt', 'a');
fwrite($archivo, json_encode($MiObjeto));
fclose($archivo);
?>