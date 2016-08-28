<html>
<head>
	<title>Aplicacion 12</title>
</head>
<body>
<?php  

$palabra = array("h","o","l","a");

function Invertir($palabraInv)
{
	$Inv = array_reverse($palabraInv);
	foreach ($Inv as $key => $value) 
	{
		echo "$value<br>";
	}
}

Invertir($palabra);
?>
</body>
</html>