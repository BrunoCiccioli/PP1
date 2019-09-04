<?php
echo "Su nombre es ".$_GET['nombre']; 
echo "Su apellido es ".$_GET['apellido']; 
$archivo=fopen('usuarios.txt', 'a');
fwrite($archivo, $_GET['nombre']. "\n");
?>