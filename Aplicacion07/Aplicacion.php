<html>
<head>
	<title>Aplicacion 07</title>
</head>
<body>
<?php  

$miArray = array ();
$sum =0;

for ($i=0; $sum < 10 ; $i++) 
{
	if(($i % 2 )!=0)
	{
		$miArray[$sum]=$i;
		$sum++;
	}
}

//Mostrando con for
echo "Muestro con un for: <br>";
for ($i=0; $i <10 ; $i++) 
	{ 
		echo "$miArray[$i]<br/>";
	}	
//Mostrando con while
	$sum = 0;
	echo "<br>Muestro con un while<br/>";
while($sum < 10)
{
	echo "$miArray[$sum]<br/>";
	$sum++;

}
//Mostrando con foreach
echo "<br>Muestro con un foreach<br/>";
foreach ($miArray as $value) {
echo "$value<br/>";
}
?>
</body>
</html>