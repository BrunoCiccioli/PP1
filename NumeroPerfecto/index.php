<?php
//var_dump($_GET);
echo $_GET["nombre"];
$acumanterior = 0;
//$numero = 8128;
$numero = $_GET["numero"];
for ($contador=1;$contador<$numero;$contador++)
{
	if ($numero%$contador==0) 
	{
		$acumanterior=$acumanterior+$contador;
	}

}

if ($numero==$acumanterior) 
{
	echo "es perfecto";
}

else
{
	echo "no es perfecto";
}

?>