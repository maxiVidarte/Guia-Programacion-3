<html>
<head>
	<title>Aplicacion 06</title>
</head>
<body>
<?php 
$miArray = Array();
$suma =0;
for ($i=0; $i <5 ; $i++) 
	{ 
		$miArray[$i]=rand(0,10);
		echo "$i = $miArray[$i]<br>";
		$suma+=$miArray[$i];
	}
if(($suma/5)<6)
{
	echo "El promedio es menor a 6<br>";
}
else if(($suma/5)>6)
{
	echo "El promedio es mayor a 6<br>";
}
else 
	echo "El promedio es 6<br>";

echo "El resultado es: ".($suma/5);
 ?>
</body>
</html>