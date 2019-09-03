<?php
/*numeros primos de 1 a 1000

*/
	$numero;
	for($numero=2;$numero<1001;$numero++)
	{
		$banderaNoEsPrimo=0;
      	//echo $numero;
      	for($anterior=2;$anterior<$numero;$anterior++)
      	{
      		//echo $anterior;
      		if($numero%$anterior==0)
      		{
      			$banderaNoEsPrimo=1;

      		}	
      	}
      	if($banderaNoEsPrimo==0)
      	{
      		echo $numero;
      	}	
		echo"<br>";
	}	

?>