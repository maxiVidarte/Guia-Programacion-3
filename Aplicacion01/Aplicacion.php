<html>
<head>
	<title>Aplicacion 01</title>
</head>
<body>
	<H1>Aplicacion 1</h1>
<?php 

$numero= 0;
$i=0;

while ($numero < 1000) 
{
	$i++;
	$numero+=$i;
	if($numero>1000)
	{
		$numero-=$i;
		$i--;
		break;
	}

}
echo "<h3>numeros sumados: </h3>";
for ($j=1; $j <=$i ; $j++) { 
if($j==$i)
	echo "$j";
else
	echo "$j +";
 } 
echo "<h2>La suma dio: $numero</h2>";
echo "<h3>Se sumaron $i numeros</h3>";
 ?>
</body>
</html>