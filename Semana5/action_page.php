<?php
echo "Su nombre es ".$_GET['nombre']; 
echo "Su apellido es ".$_GET['apellido']; 
$MiObjeto=new stdClass();
$MiObjeto->nombre=$_GET['nombre'];
$MiObjeto->apellido=$_GET['apellido'];




//var_dump(json_encode($MiObjeto));

$archivo=fopen('usuarios.txt', 'a');
fwrite($archivo, json_encode($MiObjeto)."\n");
fclose($archivo);

$archivo = fopen("usuarios.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($archivo)) {
  echo fgets($archivo) . "<br>";
}
fclose($archivo);
?>